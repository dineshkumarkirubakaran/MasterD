
Error to fix installation: 

  sudo apt-get install php-mcrypt

  sudo apt-get install php-curl

  sudo apt-get install php-gd

  sudo apt-get install php-soap

  sudo service apache2 restart




plugin install error-> site not open:

maintenance.flag file remove your folder



adding top menu: 
path: learn_multivendor/app/design/frontend/rwd/default/template/page/html/topmenu.phtml

code:

<?php if($_menu): ?>
    <nav id="nav">       
	<ol class="nav-primary">
        <!-- HOME BUTTON HACK -->
        <?php $_anyActive = false; foreach ($this->getStoreCategories() as $_category) { $_anyActive = $_anyActive || $this->isCategoryActive($_category); } ?>
        <li class="level0 nav-1 first <?php echo !$_anyActive ? 'active' : '' ?>">
	<a href="<?php echo $this->getUrl('')?><?php //echo Mage::helper('core/url')->getHomeUrl(); ?>"><?php echo $this->__('Home') ?></a>
        </li>
        <li class="level0 nav-1" id="about-us-li">
	<a href="<?php echo $this->getUrl('')?>about-magento-demo-store/" title="About" class="top-link" id="about-us-top-link"><?php echo $this->__('About') ?></a>
        </li>
        <li class="level0 nav-1" id="blog-li">
	<a href="<?php echo $this->getUrl('')?>blog/" title="Blog" class="top-link" id="blog-top-link"><?php echo $this->__('Blog') ?></a>
        </li>
        <li class="level0 nav-1" id="contact-us-li">
	<a href="<?php echo $this->getUrl('')?>contacts/" title="Contact" class="top-link" id="contact-us-top-link"><?php echo $this->__('Contact') ?></a>
        </li>                
        <!-- HOME BUTTON HACK -->
    <?php echo $_menu ?>
        <li class="level0 nav-1" id="special-product-li">
            <a href="<?php echo $this->getUrl('')?>special-product/" title="Special product" class="top-link" id="special-product-top-link"><?php echo $this->__('Special product') ?></a>
        </li>  
        <li class="level0 nav-1" id="instock-li">
            <a href="<?php echo $this->getUrl('')?>instock/" title="Instock" class="top-link" id="instock-top-link"><?php echo $this->__('Instock') ?></a>
        </li>                      
        </ol>


    </nav>
<?php endif ?>



magento base url call:

 <?php echo $this->getBaseUrl().$_product['url_path']; ?>


magento breadcrumbs adding:

path: /marketplace/app/design/frontend/rwd/default/template/contacts/form.phtml

<?php
$breadcrumbs = $this->getLayout()->getBlock('breadcrumbs');
$breadcrumbs->addCrumb('home', array('label'=>Mage::helper('cms')->__('Home'), 'title'=>Mage::helper('cms')->__('Home Page'), 'link'=>Mage::getBaseUrl())); 
$breadcrumbs->addCrumb('contactus', array('label'=>'Contact Us', 'title'=>'All Contact Us', 'link'=>Mage::getBaseUrl()."/contacts"));

echo $this->getLayout()->getBlock('breadcrumbs')->toHtml();
?>



blog page extension and code:

link : https://www.magentocommerce.com/magento-connect/blog-3-1.html

cms->page->create blog page->content->

{{block type='mageplaza_betterblog/post_recent' post_count="6" block_name="Latest from the blog" template='mageplaza_betterblog/post/recent.phtml'}}





search over all file

http://localhost/multivendor/searchIt.php


magento new product add => new fields-adding:

step1: admin page-> catalog->attributes-> manage attributes-> add new attributes;

step2: admin page-> catalog->attributes-> manage attribute sets->default-> unassigned attributes to drop particular group.








 

