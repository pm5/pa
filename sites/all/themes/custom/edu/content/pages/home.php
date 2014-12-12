<h2>Upcoming courses</h2>
        <p>An utinam reprimique duo, putant mandamus cu qui. Autem possim his cu, quodsi nominavi fabellas ut sit, mea ea ullum epicurei. Saepe tantas ocurreret duo ea, has facilisi vulputate an. Priaeque iuvaret nominati et, ad mea clita numquam. Maluisset dissentiunt et per, dico liber erroribus vis te. Dolor consul graecis nec ut, scripta eruditi scriptorem et nam.</p>
        <hr>


<?php
$gray = false;
$vocabulary = taxonomy_vocabulary_machine_name_load('course');
$tree = taxonomy_get_tree($vocabulary->vid);
foreach ($tree as $key => $term){
$course = taxonomy_term_load($term->tid);
$count = db_query("SELECT COUNT(nid) FROM {taxonomy_index} WHERE tid = :aid", array(':aid' => $course->tid) )->fetchField();
if(isset($course->field_promote['und'])&&$course->field_promote['und'][0]['value']){
$gray = !$gray;
?>
           <div class="strip-courses <?php if($gray){ print 'gray'; } ?>">
       		 <div class="title-course">
   			   <h3><?php print $course->name; if(isset($course->field_is_new['und'])&&$course->field_is_new['und'][0]['value']){ ?><img src="/sites/all/themes/custom/edu/img/new.png" alt="New"><?php } ?></h3>
               <ul>
               		<li><i class="icon-calendar"></i> Start date: <?php if(isset($course->field_date['und'])){ print $course->field_date['und'][0]['value']; } ?></li>
                        <li><i class="icon-bookmark"></i> ID: <?php if(isset($course->field_id['und'])){ print $course->field_id['und'][0]['value']; } ?></li>
               </ul>
             </div>
                <div class="description">
                	<p><?php print $course->description; ?></p>
                    <ul>
                    	<li><i class="icon-book"></i> <?php print $count; ?> Lessons</li>
                        <?php if(isset($course->field_level['und'])){ ?><li><i class="icon-reorder"></i> Level <?php print $course->field_level['und'][0]['value']; ?></li><?php } ?>
                        <?php if(isset($course->field_is_online['und'])&&$course->field_is_online['und'][0]['value']){ ?><li class="online"><i class="icon-laptop"></i> Online</li><?php } ?>
                    </ul>
                <a href="<?php print url('taxonomy/term/' . $course->tid); ?>" class="button_medium button-align-2">Read more </a>
                </div>
            </div><!-- end strip-->
<?php
}
}
?>

<br>
<hr>
<p class="text-center"><a href="/all-courses" class="button_large">View all courses </a></p>