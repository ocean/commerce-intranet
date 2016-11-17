<?php

namespace Drupal\news_centre\Controller;

use Drupal\Core\Controller\ControllerBase;

class MainController extends ControllerBase {

  public function home() {
    // return [
    //   '#type' => 'markup',
    //   '#markup' => $this->t(
    //     'This should show on the home page of the news centre.'
    //   )
    // ];

    $news_feed_url = 'https://www.commerce.wa.gov.au/announcements/182/all/feed';
    $client = \Drupal::httpClient(['headers' => ['Accept' => 'application/xml']]);
    try {
      $response = $client->get($news_feed_url);
      $body = $response->getBody();
      $stringBody = (string) $body;
      // var_dump($response);
      // var_dump($stringBody);
      $p = xml_parser_create();
      $val = array();
      $ind = array();
      xml_parse_into_struct($p, $stringBody, $val, $ind);
      xml_parser_free($p);
      // var_dump($ind);
      // var_dump($val);
    }
    catch (RequestException $e) {
      watchdog_exception('news_centre', $e);
    }

    return [
      '#theme' => 'news_centre_home',
      // '#data' => $response
      // '#data' => $stringBody
      '#data' => $val
    ];
  }
}
