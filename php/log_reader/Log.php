<?php

namespace Task;

class Log {
  protected $_crawlers = null;
  private $_views = null;
  private $_uniqueUrls = null;
  private $_traffic = null;
  private $_codesNumber = null;

  public function __construct() {
    $this->_crawlers = ['Google' => 0, 'Bing' => 0, 'Baidu' => 0, 'Yandex' => 0];
  }

  /**
   * @return int
   */
  public function views(): int {
    return $this->_views;
  }

  /**
   * @return int
   */
  public function uniqueUrls(): int {
    return $this->_uniqueUrls;
  }

  /**
   * @return int
   */
  public function traffic(): int {
    return $this->_traffic;
  }

  /**
   * @return array
   */
  public function crawlers(): array {
    return $this->_crawlers;
  }

  /**
   * @return array
   */
  public function codesNumber(): array {
    return $this->_codesNumber;
  }

  /**
   * @param int $number
   */
  protected function _setViews(int $number) {
    $this->_views = $number;
  }

  /**
   * @param int $number
   */
  protected function _setUniqueUrls(int $number) {
    $this->_uniqueUrls = $number;
  }

  /**
   * @param int $amount
   */
  protected function _setTraffic(int $amount) {
    $this->_traffic = $amount;
  }

  /**
   * @param array $codesNumber
   */
  protected function _setCodesNumber(array $codesNumber) {
    $this->_codesNumber = $codesNumber;
  }
}

?>
