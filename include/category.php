<?php 
$Specializ = array(array(
    'Legal  Consulting' , array(
        'Administrative law',
        'Advertising law',
        'Agency law',
        'Alternative dispute resolution',
        'Banking law',
        'Bankruptcy law',
        'Business law',
        'Consumer law',
        'Contract law',
        'Copyright law',
        'Corporate law',
        'Cyber law',
        'Employment law',
        'Entertainment law',
        'FDA law',
        'Financial services regulation law',
        'Gaming law',
        'Health and safety law',
        'Health law',
        'Immigration law',
        'Insurance law',
        'Intellectual property law',
        'International law',
        'Mergers &amp; acquisitions law',
        'Patent law',
        'Privacy law',
        'Private equity law',
        'Real estate law',
        'Tax law',
        'Technology law',
        'Trademark law',
    )),array(
    'Programming and Tech',array(
        'Mobile Apps &amp; Web',
        'WordPress',
        'Web Programming',
        'Desktop applications',
        'Ecommerce',
        'Website Building &amp; CMS',
        'Quality Assurance',
        'IT Support',
        'Data Analysis &amp; Reports',
        'Databases',
        'Videos and Animation',
    )),
    array('Graphics and Design' , array('test')),
    array('Marketing &amp; Salesian' , array(
        'Market Research',
        'Digital Marketing',
        'Product Sales',
        'Customer Service',
        'Exporting',
        'Importing',
        'Business  Funding',
        'Equity Funding',
        'Debt Funding',
        'Angel investors',
        'Crowdfunding',
        'Grants',
    )),
    array('Advertisement',array(
        'Website/App Promotion',
        'Banner Advertising',
        'Outdoor Advertising/ Billboards',
        'Flyers &amp; Handouts',
        'Radio/TV',
    )),
    array('Financial Management' , array(
        'Business/Corporate Planning',
        'Equity Release',
        'Insurance &amp; Protection',
        'Investment',
        'Mortgages',
        'Offshore Investing',
        'Corporate Financial Planning',
        'Stock broking',
        'Taxation',
        'Risk Management ',
    )),
    array('Property and Space Leasing',array('test'))
);
?>


<select class="form-control" name="cat" id="inPutt" style="height:38px; width:100%; ">
    <option value="0">-------Select Consultant Category -------</option>
    <?php foreach ($Specializ as $k => $v) {?>
        
            <optgroup label="<?php echo $v[0]; ?>">
           
                <?php
                if (is_array($v[1])) {
                    foreach ($v[1] as $k1=>$vs) { ?> 
                <option <?php if(isset($_GET['cat']) && trim($_GET['cat'])==$k.'-'.$k1){ echo 'selected="selected"';} ?> value="<?php echo $k.'-'.$k1; ?>"><?php echo $vs; ?></option>
                   <?php
                    }
                }
                ?>
            </optgroup>
<?php } ?>
    
    
    
    
</select>
