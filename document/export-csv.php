<?php
namespace App\Services\Common;

use League\Csv\Reader;
use League\Csv\Writer;
use League\Csv\CharsetConverter;

class CsvService
{
    /**
     * BOM付きUTF-8のCSV作成
     *
     * @param string $filePath
     * @param array $records
     * @return string
     */
    public static function createWithUtf8(string $filePath, array $records)
    {
        if (!empty($records[0]) && !empty($records[0][0])) {
            $records[0][0] = "\xEF\xBB\xBF" . $records[0][0];
        }
        $writer = Writer::createFromPath($filePath, 'a+');
        $writer->insertAll($records);
        return $filePath;
    }

    /**
     * BOM付きUTF-8のCSV作成
     *
     * @param string $filePath
     * @param array $records
     * @return string
     */
    public static function createWithUtf8insertOne(string $filePath, array $record)
    {
      // ファイルが存在するかチェック
      if (!file_exists($filePath)) {
        // 新しいファイルを作成し、ヘッダーを追加
        $writer = Writer::createFromPath($filePath, 'a+');
        $headers = array();
        foreach($record as $key => $val) {
          $headers[] = $key;
        }
        $writer->insertOne($headers); // ヘッダーを追加
      } else {
        // 既存のファイルを追記モードで開く
        $writer = Writer::createFromPath($filePath, 'a');
      }

      $writer->insertOne($record);
      return $filePath;
    }

    /**
     * SJIS-winのCSV作成
     *
     * @param string $filePath
     * @param array $records
     * @return string
     */
    public static function createWithSjis(string $filePath, array $records)
    {
        $writer = Writer::createFromPath($filePath, 'a+');
        $encoder = (new CharsetConverter())
            ->inputEncoding('utf-8')
            ->outputEncoding('SJIS-win');
        $writer->addFormatter($encoder);
        $writer->insertAll($records);
        return $filePath;
    }
}
