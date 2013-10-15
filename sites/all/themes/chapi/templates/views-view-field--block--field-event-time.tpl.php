<?php
// $Id: views-view-field--events--block-field-date-value.tpl.php,v 1.0.0 2010/01/06 09:00:32 SymphonyThemes Exp $
?>
<?php 
  $create_date = explode(' ',eregi_replace('<[^>]*>','', $output));

  echo '<div class="block-event-datetime">' . '<div class="block-event-month-year">'. date('M Y',strtotime($create_date[1])).'</div>'  . '<div class="block-event-day">'.date('d',strtotime($create_date[1])) . '</div>'. '</div>';
