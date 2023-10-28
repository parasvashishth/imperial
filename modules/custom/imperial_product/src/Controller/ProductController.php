<?php
namespace Drupal\imperial_product\Controller;
  use Drupal\Core\Link;
  use Drupal\Core\Url;
  use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Database\Connection;
use Drupal\node\Entity\Node;
use Drupal\Core\Entity\Query\Sql\Query;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Drupal\taxonomy\Entity\Term;
use Drupal\taxonomy\Entity\Vocabulary;
use Drupal\taxonomy\TermInterface;
use Drupal\file\Entity\File;
class ProductController {

  
  public function fetch_parent() {

/*$vid = 'products';
$parent =1;
$tree = \Drupal::entityTypeManager()->getStorage('taxonomy_term')->loadTree('products', 0);

foreach ($tree as $term) {
  $termId  = $term->tid;
  print_r($term->parents);
  if (in_array($termId, $term->parents)) {
    print_r('e');
    $parent_term = $term;
    print_r($parent_term);
    //break;
  }
}*/



 $vocabulary_name = 'products_category'; //name of your vocabulary
  $query = \Drupal::entityQuery('taxonomy_term');
  $query->condition('vid', $vocabulary_name);
  $query->condition('parent', 0);

  $query->sort('weight');
  $tids = $query->execute();
  $terms = Term::loadMultiple($tids);
  $output = '<ul>';
  foreach($terms as $term) {
      $name = $term->getName();;
      $url = Url::fromRoute('entity.taxonomy_term.canonical', ['taxonomy_term' => $term->id()]);
      $link = Link::fromTextAndUrl($name, $url);
      $link = $link->toRenderable();
      $rendered = \Drupal::service('renderer')->render($link);
      $output .='<li>'.$rendered.'</li>';
  }
  $output .= '</ul>';

  // print_r($output);
  // die('here');
  //print $output;
//print_r($tree);
//die();
//print_r($term_data);
//    print_r('hh');
   // die();
      
  return [
            '#theme' => 'GlobalSearchPage',
            '#data' =>  $output,
        ];
  }





  public function fetch_child($tid){
//$childrens = taxonomy_get_children($tid);
//print_r($childrens);

$vid = 'products_category';
$parent_tid = $tid; // the parent term id
$depth = 1; // 1 to get only immediate children, NULL to load entire tree
$load_entities = FALSE; // True will return loaded entities rather than ids
$child_terms = \Drupal::entityTypeManager()->getStorage('taxonomy_term')->loadTree($vid, $parent_tid, $depth, $load_entities);
 foreach ($child_terms as $child_term) {
              $terme_name = $child_term->name;
              //print_r($terme_name);
}
//die();
   return [
      '#type' => 'markup',
      '#markup' => $tid,
    ];
  }
}
?>