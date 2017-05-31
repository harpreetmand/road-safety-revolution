<?php /* Template Name: home Page Template */ get_header(); ?>
<main role="main">
    <!-- section -->
    <section>
        <div class="container underMainImage text-center">
            <p>The Ontario Brain Injury Association (OBIA) in collaboration with the Personal Injury Alliance (PIA Law) are
                pleased to present the 2017 Awards of Excellence in Brain Injury Rehabilitation.</p>
            <p>These awards will be presented by the Ontario Brain Injury Association to recipients who have been selected by
                their peers for providing exceptional service to the brain injury community.</p>
            <div class="bigger">
                Here are the five categories:
            </div>
            <div class="row categories mar20 flex-container">
                <div class="flex-item fiveCate">
                    <div class="title">
                        <span class="vAllign">HOSPITAL SOCIAL WORKER OF THE YEAR</span>
                    </div>
                    <img src="<?php echo get_site_url(); ?>/img/social-worker-of-year.jpg" alt "Hospital social worker of the year" class="img-responsive"
                    />
                    <div class="text">
                        This award is given to a hospital social worker who has consistently gone above and beyond the call of duty to assist brain
                        injury survivors and their families.
                    </div>
                </div>
                <div class="flex-item fiveCate">
                    <div class="title">
                        <span class="vAllign">CASE MANAGER OF THE YEAR</span>
                    </div>
                    <img src="<?php echo get_site_url(); ?>/img/case-manager-of-year.jpg" alt "CASE MANAGER OF THE YEAR" class="img-responsive"
                    />
                    <div class="text">
                        This award is given to a case manager working in a private practice who consistently goes above and beyond the call of duty
                        to assist catastrophically impaired brain injury survivors and their families.
                    </div>
                </div>
                <div class="flex-item fiveCate">
                    <div class="title">
                        <span class="vAllign">HEALTH CARE PROVIDER OF THE YEAR</span>
                    </div>
                    <img src="<?php echo get_site_url(); ?>/img/health-care-provider-of-year.jpg" alt "HEALTH CARE PROVIDER OF THE YEAR" class="img-responsive"
                    />
                    <div class="text">
                        This award is given to a hospital social worker who has consistently gone above and beyond the call of duty to assist brain
                        injury survivors and their families.
                    </div>
                </div>
                <div class="flex-item fiveCate">
                    <div class="title">
                        <span class="vAllign">COMMUNITY BRAIN INJURY ASSOCIATION OF THE YEAR</span>
                    </div>
                    <img src="<?php echo get_site_url(); ?>/img/community-brain-injury-association-of-year.jpg" alt
                        "COMMUNITY BRAIN INJURY ASSOCIATION OF THE YEAR" class="img-responsive" />
                    <div class="text">
                        This award is given to a non-profit brain injury association which provides exemplary, innovative and expert services to
                        individuals in the brain injury community.
                    </div>
                </div>
                <div class="flex-item fiveCate">
                    <div class="title">
                        <span class="vAllign">REHABILITATION COMPANY OF THE YEAR</span>
                    </div>
                    <img src="<?php echo get_site_url(); ?>/img/rehabilation-company-of-year.jpg" alt "REHABILITATION COMPANY OF THE YEAR" class="img-responsive"
                    />
                    <div class="text">
                        This award is given to a private rehabilitation company that consistently provides exemplary and dedicated services to individuals
                        in the brain injury community, including volunteer work.
                    </div>
                </div>
            </div>
            <div class="nominate row mar20">
                <div class="title">
                    <div class="biggerTitle">NOMINATE<br/><span>FROM JUNE 1st THROUGH JULY 14th, 2017</span></div>
                </div>
                <div class="pictureForm">
                    <div class="col-sm-4 pad0 backPic">
                        <!--<img src="</?php echo get_site_url(); ?>/img/nominate-person.jpg" alt"Nominate in 2017" class="img-responsive"/>        -->
                    </div>
                    <div class="col-sm-8 nominateForm">
                        <div class="submitNomination">
                            PLEASE SUBMIT YOUR NOMINATION FOR ANY OF THE 5 AWARDS OF EXCELLENCE BY FILLING OUT THE NOMINATION FORM BELOW
                        </div>
                        <?php echo do_shortcode("[contact-form-7 id=\"59\" title=\"nominate\"]") ?>
                        <i class="fa fa-arrow-right vAllign hidden-xs" aria-hidden="true"></i>
                    </div>
                    <div class="cf"></div>
                </div>
            </div>
            <div class="votingBox row mar20">
                <div class="biggerTitle">VOTING<br/>
                <span>STARTS AUGUST 8th TO SEPTEMBER 15th</span></div>
            </div>
            <div class="pastAward row mar20">
                <div class="col-sm-6 pad0">
                    <img src="<?php echo get_site_url(); ?>/img/past-award-recipients.jpg" alt="Past award recipients" class="img-responsive"/>
                </div>
                <div class="col-sm-6 pad0 rightSide">
                    <img src="<?php echo get_site_url(); ?>/img/past-award-recipients.jpg" alt="Past award recipients" class="img-responsive hideThis hidden-xs"/>
                    
                    <div class="vAllign hAllign">
                        
                    Past Award Recipients
                    </div>
                </div>
            </div>

            <div class="row mar20 threeLinks flex-container ">
            
                <a href="<?php echo get_site_url(); ?>/award-recipients/2016-award-recipients/">            
                    <span class="hvr-rectangle-in">
                        CLICK HERE TO VIEW 2016 AWARD RECIPIENTS
                    </span>
                </a>
                <a href="<?php echo get_site_url(); ?>/award-recipients/2015-award-recipients/">                    
                    <span class="hvr-rectangle-in">
                        CLICK HERE TO VIEW 2015 AWARD RECIPIENTS
                    </span>
                </a>
                <a href="<?php echo get_site_url(); ?>/award-recipients/2014-award-recipients/">                    
                    <span class="hvr-rectangle-in">
                        CLICK HERE TO VIEW 2014 AWARD RECIPIENTS
                    </span>
                </a>
            </div>
           
</div>

    </section>

</main>
<!--</?php get_sidebar(); ?>-->
<?php get_footer(); ?>