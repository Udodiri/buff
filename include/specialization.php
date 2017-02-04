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

<ul class="Specializ">
    <?php foreach ($Specializ as $k => $v) {?>
        <li><?php echo $v[0]; ?>
            <ul>
                <?php
                if (is_array($v[1])) {
                    foreach ($v[1] as $k1=>$vs) { 
                        $chk='';
                        if(isset($_SESSION['user']->specilization) && in_array($k.'-'.$k1, $_SESSION['user']->specilization))
                        {
                            $chk="checked='checked'";
                        }
                        ?>
                <li><label><input <?php echo $chk; ?> class="specilization" type="checkbox" name="specilization[]" value="<?php echo $k.'-'.$k1; ?>">&nbsp;<?php echo $vs; ?></label></li>                    <?php
                    }
                }
                ?>
            </ul>

        </li>
<?php } ?>
</ul>