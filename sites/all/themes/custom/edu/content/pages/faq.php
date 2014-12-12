<div class="main-img">
				<img src="/sites/all/themes/custom/edu/img/staff.jpg" alt="">
				<p class="lead">Tibique dolores adversarium ne vel. At vide errem duo, vis luptatum menandri ullamcorper id.</p>
			</div>
                        <h2>Frequently Asked <strong>Questions</strong></h2>
			<p>
				Lorem ipsum dolor sit amet, elitr nullam ei duo. Duo ut omnes scribentur. <strong>Vim ne quas invidunt intellegam</strong>, quo docendi blandit electram ei, vel ex omittam detracto philosophia. Ei nam reque etiam, possit eripuit ad vel. Aperiri deserunt ea cum. Eam animal principes neglegentur cu, facer audiam forensibus his ex. Tibique dolores adversarium ne vel. At vide errem duo, vis luptatum menandri ullamcorper id. Duo cu <a href="#">tractatos interesset</a>, at usu soluta tibique principes. Ei cum dicam suavitate, eum ex erant homero mandamus, his te albucius platonem mediocritatem.
			</p>
			<hr><br>


 <?php
	$recent_posts = array();
	$query = db_select('node', 'n')
      ->fields('n', array('nid'))
      ->condition('type', 'faq')
      ->condition('status', 1)
      ->orderBy('created', 'DESC')->execute();
	foreach ($query as $node) {
        $faq = node_load($node->nid);
        //dsm($faq);
?>               
                <a class="accrodian-trigger" href="#"><?php print $faq->title; ?></a>
                <div class="accrodian-data">
                    <p>
                        <?php print $faq->body['und'][0]['safe_value']; ?>
                    </p>
                </div>
<?php
}
?>