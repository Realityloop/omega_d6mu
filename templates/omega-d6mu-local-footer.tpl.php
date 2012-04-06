<p class="footertitle"><?php print $footer_title; ?></p>
<div id="org-details" class="col-2">
  <p><strong><?php print $org_name; ?></strong></p>
  <p class="location"><?php print $org_location_1; ?><br><?php print $org_location_2; ?><br><?php print $org_location_3; ?></p>
</div>

<ul class="col-2">
  <li><strong><?php print t('Phone:'); ?></strong> <?php print $phone; ?></li>
  <li><strong><?php print t('Fax:'); ?></strong> <?php print $fax; ?></li>
  <li><strong><?php print t('Email:'); ?></strong> <?php print $email_link; ?></li>
  <li class="social"><?php print $fb_url; ?> <?php print $twitter_url; ?></li>
</ul>

<ul class="col-2">
  <li><strong><?php print t('Authoriser:'); ?></strong>
    <br><?php print $authoriser; ?></li>
  <li><strong><?php print t('Maintainer:'); ?></strong><br><?php print $maintainer; ?></li>
</ul>

<ul class="col-2">
  <li><strong><?php print t('Date created:'); ?></strong><br>
    <?php print $created; ?></li>
  <li><!--#config timefmt="%d %B %Y %H:%M:%S" --><strong><?php print t('Last modified:'); ?></strong><br>
<!--#echo var="LAST_MODIFIED" --><?php print $modified; ?></li></li>
</ul>
<hr>