<meta charset = "UTF-8">

<meta name="description" content="Blue Whale Study: conducting ecological research and education
to understand and help conserve Endangered blue whales and their feeding habitat, southern Australia." />
<meta name="keywords" content="Blue Whale Study, blue whale, whales, Balaenoptera musculus, Pete Gill, Margie Morrice, australia, southern australia, Victoria, Portland, ecology, whale ecologogists, endangered, bonney upwelling, the big blue" />
<meta name="author" content="www.bluewhalestudy.org" />

<title>Blue Whale Study: Balaenoptera musculus</title>

<!-- Here are the basic css and other meta data tags -->
<link rel="stylesheet" href="<?=base_url();?>css/screen.css" type="text/css" media="screen, projection" />
<!--[if IE]><link rel="stylesheet" href="<?=base_url();?>css/ie.css" type="text/css" media="screen, projection"><![endif]-->


<link rel="stylesheet" href="<?=base_url();?>includes/navstyle.css" type="text/css" />

<link rel="stylesheet" href="<?=base_url();?>css/bws_meg.css" type="text/css" />


<link rel="stylesheet" type="text/css" href="<?=base_url(); ?>includes/jqueryslidemenu.css" />
<link rel="stylesheet" href="<?=base_url();?>assets/development-bundle/themes/base/jquery.ui.all.css" />
<link rel="stylesheet" href="<?=base_url();?>assets/development-bundle/themes/base/jquery.ui.datepicker.css" />


<!--[if lte IE 7]>
<style type="text/css">
html .jqueryslidemenu{height: 1%;} /*Holly Hack for IE7 and below*/
</style>
<![endif]-->

<!--Not sure what this script does, may need to delete-->
<script type="text/javascript" src="<?=base_url();?>includes/script.js"></script>



<script>
function setActive() {
  aObj = document.getElementById('myslidemenu').getElementsByTagName('a');
  for(i=0;i<aObj.length;i++) {
    if(document.location.href.indexOf(aObj[i].href)>=0) {
      aObj[i].className='active';
    }
  }
}
window.onload = setActive;

</script>

