<?php

namespace Task;

class Reader extends Log {

  /**
   * @param string $name
   */
  public function readFile(string $name) {
    $lines = $this->_openFile($name);

    foreach ($lines as $line) {
      $words = explode(' ', $line);
      $views++;
      $uniqueUrls[] = $words[10];
      $traffic += $words[9];
      $codesNumber[] = $words[8];
      $this->_findCrawlersNumber($line);
    }
    $this->_setViews($views);
    $this->_setUniqueUrls(count(array_unique($uniqueUrls)));
    $this->_setTraffic($traffic);
    $this->_setCodesNumber($this->_findCodesNumber($codesNumber));
  }

  /**
   * @param string $name
   * @return iterable
   */
  private function _openFile(string $name): iterable {
    foreach(file($name) as $line) {
      yield $line;
    }
  }

  /**
   * @param array $codesNumber
   * @return array
   */
  private function _findCodesNumber(array $codesNumber): array {
    return array_count_values($codesNumber);
  }

  /**
   * @param string $line
   */
  private function _findCrawlersNumber(string $line) {
    foreach ($this->_crawlers as $name => $number) {
      if (stripos($line, "{$name}bot") || stripos($line, "{$name}spider")) {
        $this->_crawlers[$name] += 1;
      }
    }
  }
}

?>
