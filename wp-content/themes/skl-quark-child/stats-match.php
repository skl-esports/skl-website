<?php
/**
 * The template used for displaying page content in page.php
 * Template Name: LoL Stats Match Page
 * @package pro
 */
?>
<!DOCTYPE html>
<html lang="en">
<?php get_header()?>
<body>
<div class="banner-wrap e-sport">
      <!-- BANNER -->
      <div class="banner grid-limit">
        <h2 class="banner-title">Match Results</h2>
        <p class="banner-sections">
          <span class="banner-section">Canadian Nationals</span>
          <!-- ARROW ICON -->
          <svg class="arrow-icon">
            <use xlink:href="#svg-arrow"></use>
          </svg>
          <!-- /ARROW ICON -->
          <span class="banner-section">Match Results</span>
        </p>
      </div>
      <!-- /BANNER -->
    </div>
  
  <!-- LAYOUT CONTENT FULL -->
  <div class="layout-content-full v2 grid-limit layout-item gutter-big">
    <!-- TAB WRAP -->
    <div class="tab-wrap">
      <!-- TAB BODY -->
      <div class="tab-body">
        <!-- TAB ITEM -->
        <div class="tab-item">
          <!-- WIDGET MATCH BOX -->
          <div class="widget-match-box">
            <!-- WIDGET TITLE WRAP -->
            <div class="widget-title-wrap full">
              <h6 class="widget-title">Tournament 5v5 - Canada</h6>
              <p class="widget-text">Janurary 26th 2020, 8:00PM</p>
            </div>
            <!-- /WIDGET TITLE WRAP -->

            <!-- WIDGET TEAM VS -->
            <div class="widget-team-vs v2 medium centered">
              <!-- WIDGET TEAM VS ITEM -->
              <div class="widget-team-vs-item">
                <!-- TEAM INFO WRAP -->
                <div class="team-info-wrap medium">
                  <!-- TEAM LOGO -->
                  <img class="team-logo medium" src="<?php echo get_stylesheet_directory_uri()?>/img/teams/logos/01.png" alt="logo-01">
                  <!-- /TEAM LOGO -->

                  <!-- TEAM INFO -->
                  <div class="team-info">
                    <!-- TEAM NAME -->
                    <p class="team-name">The Lone Wolves</p>
                    <!-- /TEAM NAME -->

                    <!-- TEAM COUNTRY -->
                    <p class="team-country">United States</p>
                    <!-- /TEAM COUNTRY -->
                  </div>
                  <!-- /TEAM INFO -->
                </div>
                <!-- /TEAM INFO WRAP -->
              </div>
              <!-- /WIDGET TEAM VS ITEM -->

              <!-- MATCH STATS -->
              <div class="match-stats">
                <p class="match-score medium">2 - 1</p>
                <p class="match-time medium">Final</p>
              </div>
              <!-- /MATCH STATS -->

              <!-- WIDGET TEAM VS ITEM -->
              <div class="widget-team-vs-item">
                <!-- TEAM INFO WRAP -->
                <div class="team-info-wrap medium inverted">
                  <!-- TEAM LOGO -->
                  <img class="team-logo medium" src="<?php echo get_stylesheet_directory_uri()?>/img/teams/logos/02.png" alt="logo-02">
                  <!-- /TEAM LOGO -->

                  <!-- TEAM INFO -->
                  <div class="team-info">
                    <!-- TEAM NAME -->
                    <p class="team-name">Raging Rhinos</p>
                    <!-- /TEAM NAME -->

                    <!-- TEAM COUNTRY -->
                    <p class="team-country">South Africa</p>
                    <!-- /TEAM COUNTRY -->
                  </div>
                  <!-- /TEAM INFO -->
                </div>
                <!-- /TEAM INFO WRAP -->
              </div>
              <!-- /WIDGET TEAM VS ITEM -->
            </div>
            <!-- /WIDGET TEAM VS -->
          </div>
          <!-- /WIDGET MATCH BOX -->
        </div>
        <!-- /TAB ITEM -->
      </div>
      <!-- /TAB BODY -->

      <!-- TAB HEADER -->
      <div class="tab-header items-3">
        <!-- TAB HEADER ITEM -->
        <div class="tab-header-item selected">
          <!-- TAB HEADER ITEM TEXT -->
          <p class="tab-header-item-text">Game 01</p>
          <!-- /TAB HEADER ITEM TEXT -->
        </div>
        <!-- /TAB HEADER ITEM -->

        <!-- TAB HEADER ITEM -->
        <div class="tab-header-item">
          <!-- TAB HEADER ITEM TEXT -->
          <p class="tab-header-item-text">Game 02</p>
          <!-- /TAB HEADER ITEM TEXT -->
        </div>
        <!-- /TAB HEADER ITEM -->

        <!-- TAB HEADER ITEM -->
        <div class="tab-header-item">
          <!-- TAB HEADER ITEM TEXT -->
          <p class="tab-header-item-text">Game 03</p>
          <!-- /TAB HEADER ITEM TEXT -->
        </div>
        <!-- /TAB HEADER ITEM -->
      </div>
      <!-- /TAB HEADER -->
    </div>
    <!-- /TAB WRAP -->

    <!-- WIDGET ITEM -->
    <div class="widget-item">
      <!-- SECTION TITLE WRAP -->
      <div class="section-title-wrap violet">
        <h2 class="section-title medium">Watch Replay</h2>
        <div class="section-title-separator"></div>
      </div>
      <!-- /SECTION TITLE WRAP -->

      <!-- WIDGET MEDIA WRAP -->
      <div class="widget-media-wrap huge">
        <!-- WIDGET MEDIA R -->
        <div class="widget-media-r">
          <iframe src="https://player.twitch.tv/?autoplay=true&muted=true&t=03h15m50s&video=v417077870" allowfullscreen></iframe>
        </div>
        <!-- /WIDGET MEDIA R -->
      </div>
      <!-- /WIDGET MEDIA WRAP -->
    </div>
    <!-- /WIDGET ITEM -->

    <!-- WIDGET ITEM -->
    <div class="widget-item">
      <!-- SECTION TITLE WRAP -->
      <div class="section-title-wrap violet small-space">
        <h2 class="section-title medium">Team Lineups</h2>
        <div class="section-title-separator"></div>
      </div>
      <!-- /SECTION TITLE WRAP -->

      <!-- TEAM LINEUPS HEADER -->
      <div class="team-lineups-header medium full">
        <!-- TEAM INFO WRAP -->
        <div class="team-info-wrap mid">
          <!-- TEAM LOGO -->
          <img class="team-logo mid" src="<?php echo get_stylesheet_directory_uri()?>/img/teams/logos/01.png" alt="logo-01">
          <!-- /TEAM LOGO -->
          
          <!-- TEAM INFO -->
          <div class="team-info">
            <p class="team-name">TLW | <span class="highlight team-blue">Victory</span></p>
            <p class="team-country">United States</p>
          </div>
          <!-- /TEAM INFO -->
        </div>
        <!-- /TEAM INFO WRAP -->
  
        <!-- FEATURED STAT WRAP -->
        <div class="featured-stat-wrap multiple-items">
          <!-- TOWER ICON -->
          <svg class="featured-stat-icon tower-icon blue">
            <use xlink:href="#svg-tower"></use>
          </svg>
          <!-- /TOWER ICON -->
  
          <!-- FEATURED STAT TITLE -->
          <p class="featured-stat-title">7</p>
          <!-- /FEATURED STAT TITLE -->
        </div>
        <!-- /FEATURED STAT WRAP -->
  
        <!-- FEATURED STAT WRAP -->
        <div class="featured-stat-wrap multiple-items">
          <!-- INHIBITOR ICON -->
          <svg class="featured-stat-icon inhibitor-icon blue">
            <use xlink:href="#svg-inhibitor"></use>
          </svg>
          <!-- /INHIBITOR ICON -->
  
          <!-- FEATURED STAT TITLE -->
          <p class="featured-stat-title">0</p>
          <!-- /FEATURED STAT TITLE -->
        </div>
        <!-- /FEATURED STAT WRAP -->
  
        <!-- FEATURED STAT WRAP -->
        <div class="featured-stat-wrap multiple-items">
          <!-- BARON ICON -->
          <svg class="featured-stat-icon baron-icon blue">
            <use xlink:href="#svg-baron"></use>
          </svg>
          <!-- /BARON ICON -->
  
          <!-- FEATURED STAT TITLE -->
          <p class="featured-stat-title">1</p>
          <!-- /FEATURED STAT TITLE -->
        </div>
        <!-- /FEATURED STAT WRAP -->
  
        <!-- FEATURED STAT WRAP -->
        <div class="featured-stat-wrap multiple-items">
          <!-- DRAGON ICON -->
          <svg class="featured-stat-icon dragon-icon blue">
            <use xlink:href="#svg-dragon"></use>
          </svg>
          <!-- /DRAGON ICON -->
        
          <!-- FEATURED STAT TITLE -->
          <p class="featured-stat-title">1</p>
          <!-- /FEATURED STAT TITLE -->
        </div>
        <!-- /FEATURED STAT WRAP -->
  
        <!-- FEATURED STAT WRAP -->
        <div class="featured-stat-wrap multiple-items">
          <!-- RIFT HERALD ICON -->
          <svg class="featured-stat-icon rift-herald-icon blue">
            <use xlink:href="#svg-rift-herald"></use>
          </svg>
          <!-- /RIFT HERALD ICON -->
  
          <!-- FEATURED STAT TITLE -->
          <p class="featured-stat-title">0</p>
          <!-- /FEATURED STAT TITLE -->
        </div>
        <!-- /FEATURED STAT WRAP -->
  
        <!-- FEATURED STAT WRAP -->
        <div class="featured-stat-wrap regular right">
          <!-- FEATURED STAT TITLE -->
          <p class="featured-stat-title"><span class="highlight">36</span> / <span class="highlight">27</span> / <span class="highlight">70</span></p>
          <!-- /FEATURED STAT TITLE -->
  
          <!-- FEATURED STAT TEXT -->
          <p class="featured-stat-text">K / D / A</p>
          <!-- /FEATURED STAT TEXT -->
        </div>
        <!-- /FEATURED STAT WRAP -->
  
        <!-- FEATURED STAT WRAP -->
        <div class="featured-stat-wrap regular left">
          <!-- FEATURED STAT TITLE -->
          <p class="featured-stat-title void"><span class="highlight">27</span> / <span class="highlight">37</span> / <span class="highlight">31</span></p>
          <!-- /FEATURED STAT TITLE -->
  
          <!-- FEATURED STAT TEXT -->
          <p class="featured-stat-text">K / D / A</p>
          <!-- /FEATURED STAT TEXT -->
        </div>
        <!-- /FEATURED STAT WRAP -->
  
        <!-- FEATURED STAT WRAP -->
        <div class="featured-stat-wrap multiple-items inverted">
          <!-- RIFT HERALD ICON -->
          <svg class="featured-stat-icon rift-herald-icon red">
            <use xlink:href="#svg-rift-herald"></use>
          </svg>
          <!-- /RIFT HERALD ICON -->
  
          <!-- FEATURED STAT TITLE -->
          <p class="featured-stat-title">0</p>
          <!-- /FEATURED STAT TITLE -->
        </div>
        <!-- /FEATURED STAT WRAP -->
  
        <!-- FEATURED STAT WRAP -->
        <div class="featured-stat-wrap multiple-items inverted">
          <!-- DRAGON ICON -->
          <svg class="featured-stat-icon dragon-icon red">
            <use xlink:href="#svg-dragon"></use>
          </svg>
          <!-- /DRAGON ICON -->
  
          <!-- FEATURED STAT TITLE -->
          <p class="featured-stat-title">2</p>
          <!-- /FEATURED STAT TITLE -->
        </div>
        <!-- /FEATURED STAT WRAP -->
  
        <!-- FEATURED STAT WRAP -->
        <div class="featured-stat-wrap multiple-items inverted">
          <!-- BARON ICON -->
          <svg class="featured-stat-icon baron-icon red">
            <use xlink:href="#svg-baron"></use>
          </svg>
          <!-- /BARON ICON -->
  
          <!-- FEATURED STAT TITLE -->
          <p class="featured-stat-title">1</p>
          <!-- /FEATURED STAT TITLE -->
        </div>
        <!-- /FEATURED STAT WRAP -->
  
        <!-- FEATURED STAT WRAP -->
        <div class="featured-stat-wrap multiple-items inverted">
          <!-- INHIBITOR ICON -->
          <svg class="featured-stat-icon inhibitor-icon red">
            <use xlink:href="#svg-inhibitor"></use>
          </svg>
          <!-- /INHIBITOR ICON -->
  
          <!-- FEATURED STAT TITLE -->
          <p class="featured-stat-title">0</p>
          <!-- /FEATURED STAT TITLE -->
        </div>
        <!-- /FEATURED STAT WRAP -->
  
        <!-- FEATURED STAT WRAP -->
        <div class="featured-stat-wrap multiple-items inverted">
          <!-- TOWER ICON -->
          <svg class="featured-stat-icon tower-icon red">
            <use xlink:href="#svg-tower"></use>
          </svg>
          <!-- /TOWER ICON -->
  
          <!-- FEATURED STAT TITLE -->
          <p class="featured-stat-title">3</p>
          <!-- /FEATURED STAT TITLE -->
        </div>
        <!-- /FEATURED STAT WRAP -->
  
        <!-- TEAM INFO WRAP -->
        <div class="team-info-wrap mid inverted">
          <!-- TEAM LOGO -->
          <img class="team-logo mid" src="<?php echo get_stylesheet_directory_uri()?>/img/teams/logos/02.png" alt="logo-02">
          <!-- /TEAM LOGO -->
          
          <!-- TEAM INFO -->
          <div class="team-info">
            <p class="team-name"><span class="highlight red">Defeat</span> | RRH</p>
            <p class="team-country">South Africa</p>
          </div>
          <!-- /TEAM INFO -->
        </div>
        <!-- /TEAM INFO WRAP -->
      </div>
      <!-- /TEAM LINEUPS HEADER -->
  
      <!-- TABLE -->
      <div class="table lineups full-stats full">
        <!-- TABLE ROW HEADER -->
        <div class="table-row-header big bordered colored">
          <!-- TABLE ROW HEADER ITEM -->
          <div class="table-row-header-item left">
            <p class="table-row-header-title">Character / Player</p>
          </div>
          <!-- /TABLE ROW HEADER ITEM -->
  
          <!-- TABLE ROW HEADER ITEM -->
          <div class="table-row-header-item padded">
            <p class="table-row-header-title">K/D/A</p>
          </div>
          <!-- /TABLE ROW HEADER ITEM -->
  
          <!-- TABLE ROW HEADER ITEM -->
          <div class="table-row-header-item padded">
            <p class="table-row-header-title">Gold</p>
          </div>
          <!-- /TABLE ROW HEADER ITEM -->
  
          <!-- TABLE ROW HEADER ITEM -->
          <div class="table-row-header-item padded">
            <p class="table-row-header-title">CS</p>
          </div>
          <!-- /TABLE ROW HEADER ITEM -->
  
          <!-- TABLE ROW HEADER ITEM -->
          <div class="table-row-header-item padded">
            <p class="table-row-header-title">Wards</p>
          </div>
          <!-- /TABLE ROW HEADER ITEM -->
  
          <!-- TABLE ROW HEADER ITEM -->
          <div class="table-row-header-item padded">
            <p class="table-row-header-title">K%</p>
          </div>
          <!-- /TABLE ROW HEADER ITEM -->
  
          <!-- TABLE ROW HEADER ITEM -->
          <div class="table-row-header-item"></div>
          <!-- /TABLE ROW HEADER ITEM -->
  
          <!-- TABLE ROW HEADER ITEM -->
          <div class="table-row-header-item"></div>
          <!-- /TABLE ROW HEADER ITEM -->
  
          <!-- TABLE ROW HEADER ITEM -->
          <div class="table-row-header-item padded">
            <p class="table-row-header-title">K%</p>
          </div>
          <!-- /TABLE ROW HEADER ITEM -->
  
          <!-- TABLE ROW HEADER ITEM -->
          <div class="table-row-header-item padded">
            <p class="table-row-header-title">Wards</p>
          </div>
          <!-- /TABLE ROW HEADER ITEM -->
  
          <!-- TABLE ROW HEADER ITEM -->
          <div class="table-row-header-item padded">
            <p class="table-row-header-title">CS</p>
          </div>
          <!-- /TABLE ROW HEADER ITEM -->
  
          <!-- TABLE ROW HEADER ITEM -->
          <div class="table-row-header-item padded">
            <p class="table-row-header-title">Gold</p>
          </div>
          <!-- /TABLE ROW HEADER ITEM -->
  
          <!-- TABLE ROW HEADER ITEM -->
          <div class="table-row-header-item padded">
            <p class="table-row-header-title">K/D/A</p>
          </div>
          <!-- /TABLE ROW HEADER ITEM -->
  
          <!-- TABLE ROW HEADER ITEM -->
          <div class="table-row-header-item right">
            <p class="table-row-header-title">Character / Player</p>
          </div>
          <!-- /TABLE ROW HEADER ITEM -->
        </div>
        <!-- /TABLE ROW HEADER -->
  
        <!-- TABLE ROWS -->
        <div class="table-rows no-color">
          <!-- TABLE ROW -->
          <div class="table-row big">
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <!-- TEAM INFO WRAP -->
              <div class="team-info-wrap medium">
                <!-- USER AVATAR WRAP -->
                <div class="user-avatar-wrap">
                  <!-- USER AVATAR -->
                  <img class="user-avatar character v2 blue" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/01.png" alt="character-01">
                  <!-- /USER AVATAR -->
  
                  <!-- USER AVATAR TEXT -->
                  <p class="user-avatar-text blue">16</p>
                  <!-- /USER AVATAR TEXT -->
                </div>
                <!-- /USER AVATAR WRAP -->
  
                <!-- SKILL LOOT LIST -->
                <div class="skill-loot-list vertical">
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/skills/skill-01.png" alt="skill-01">
                  <!-- /SKILL LOOT ITEM -->
  
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/skills/skill-02.png" alt="skill-02">
                  <!-- /SKILL LOOT ITEM -->
                </div>
                <!-- SKILL LOOT LIST -->
  
                <!-- TEAM INFO -->
                <div class="team-info">
                  <p class="team-name">Joystickz-70</p>
                  <p class="team-country">Mid | Solo</p>
                </div>
                <!-- /TEAM INFO -->
              </div>
              <!-- /TEAM INFO WRAP -->
            </div>
            <!-- /TABLE ROW ITEM -->
            
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder"><span class="highlight">9</span> / <span class="highlight">4</span> / <span class="highlight">8</span></p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">12934</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">183</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">0 25 2</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">47</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <!-- SKILL LOOT LIST -->
              <div class="skill-loot-list">
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-01.png" alt="item-01">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-02.png" alt="item-02">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-03.png" alt="item-03">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-04.png" alt="item-04">
                <!-- /SKILL LOOT ITEM -->
              </div>
              <!-- SKILL LOOT LIST -->
  
              <!-- SKILL LOOT LIST -->
              <div class="skill-loot-list">
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-05.png" alt="item-05">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-06.png" alt="item-06">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-07.png" alt="item-07">
                <!-- /SKILL LOOT ITEM -->
              </div>
              <!-- SKILL LOOT LIST -->
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <!-- SKILL LOOT LIST -->
              <div class="skill-loot-list">
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-08.png" alt="item-08">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-09.png" alt="item-09">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-10.png" alt="item-10">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-11.png" alt="item-11">
                <!-- /SKILL LOOT ITEM -->
              </div>
              <!-- SKILL LOOT LIST -->
  
              <!-- SKILL LOOT LIST -->
              <div class="skill-loot-list">
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-12.png" alt="item-12">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-13.png" alt="item-13">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-14.png" alt="item-14">
                <!-- /SKILL LOOT ITEM -->
              </div>
              <!-- SKILL LOOT LIST -->
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">37</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">1 10 9</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">211</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">11973</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder"><span class="highlight">7</span> / <span class="highlight">5</span> / <span class="highlight">3</span></p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <!-- TEAM INFO WRAP -->
              <div class="team-info-wrap medium inverted">
                <!-- USER AVATAR WRAP -->
                <div class="user-avatar-wrap">
                  <!-- USER AVATAR -->
                  <img class="user-avatar character v2 red" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/06.png" alt="character-06">
                  <!-- /USER AVATAR -->
  
                  <!-- USER AVATAR TEXT -->
                  <p class="user-avatar-text red">14</p>
                  <!-- /USER AVATAR TEXT -->
                </div>
                <!-- /USER AVATAR WRAP -->
  
                <!-- SKILL LOOT LIST -->
                <div class="skill-loot-list vertical">
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/skills/skill-11.png" alt="skill-11">
                  <!-- /SKILL LOOT ITEM -->
  
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/skills/skill-12.png" alt="skill-12">
                  <!-- /SKILL LOOT ITEM -->
                </div>
                <!-- SKILL LOOT LIST -->
  
                <!-- TEAM INFO -->
                <div class="team-info">
                  <p class="team-name">Pixelus.GD</p>
                  <p class="team-country">Bot | Carry</p>
                </div>
                <!-- /TEAM INFO -->
              </div>
              <!-- /TEAM INFO WRAP -->
            </div>
            <!-- /TABLE ROW ITEM -->
          </div>
          <!-- /TABLE ROW -->
  
          <!-- TABLE ROW -->
          <div class="table-row big">
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <!-- TEAM INFO WRAP -->
              <div class="team-info-wrap medium">
                <!-- USER AVATAR WRAP -->
                <div class="user-avatar-wrap">
                  <!-- USER AVATAR -->
                  <img class="user-avatar character v2 blue" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/02.png" alt="character-02">
                  <!-- /USER AVATAR -->
  
                  <!-- USER AVATAR TEXT -->
                  <p class="user-avatar-text blue">14</p>
                  <!-- /USER AVATAR TEXT -->
                </div>
                <!-- /USER AVATAR WRAP -->
  
                <!-- SKILL LOOT LIST -->
                <div class="skill-loot-list vertical">
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/skills/skill-03.png" alt="skill-03">
                  <!-- /SKILL LOOT ITEM -->
  
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/skills/skill-04.png" alt="skill-04">
                  <!-- /SKILL LOOT ITEM -->
                </div>
                <!-- SKILL LOOT LIST -->
  
                <!-- TEAM INFO -->
                <div class="team-info">
                  <p class="team-name">Dr.Chaos</p>
                  <p class="team-country">Bot | Support</p>
                </div>
                <!-- /TEAM INFO -->
              </div>
              <!-- /TEAM INFO WRAP -->
            </div>
            <!-- /TABLE ROW ITEM -->
            
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder"><span class="highlight">1</span> / <span class="highlight">6</span> / <span class="highlight">21</span></p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">9573</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">11</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">4 27 4</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">61</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <!-- SKILL LOOT LIST -->
              <div class="skill-loot-list">
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-08.png" alt="item-08">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-09.png" alt="item-09">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-10.png" alt="item-10">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-11.png" alt="item-11">
                <!-- /SKILL LOOT ITEM -->
              </div>
              <!-- SKILL LOOT LIST -->
  
              <!-- SKILL LOOT LIST -->
              <div class="skill-loot-list">
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-12.png" alt="item-12">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-13.png" alt="item-13">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-14.png" alt="item-14">
                <!-- /SKILL LOOT ITEM -->
              </div>
              <!-- SKILL LOOT LIST -->
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <!-- SKILL LOOT LIST -->
              <div class="skill-loot-list">
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-01.png" alt="item-01">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-02.png" alt="item-02">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-03.png" alt="item-03">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-04.png" alt="item-04">
                <!-- /SKILL LOOT ITEM -->
              </div>
              <!-- SKILL LOOT LIST -->
  
              <!-- SKILL LOOT LIST -->
              <div class="skill-loot-list">
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-05.png" alt="item-05">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-06.png" alt="item-06">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-07.png" alt="item-07">
                <!-- /SKILL LOOT ITEM -->
              </div>
              <!-- SKILL LOOT LIST -->
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">22</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">4 22 7</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">57</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">8913</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder"><span class="highlight">2</span> / <span class="highlight">9</span> / <span class="highlight">4</span></p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <!-- TEAM INFO WRAP -->
              <div class="team-info-wrap medium inverted">
                <!-- USER AVATAR WRAP -->
                <div class="user-avatar-wrap">
                  <!-- USER AVATAR -->
                  <img class="user-avatar character v2 red" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/07.png" alt="character-07">
                  <!-- /USER AVATAR -->
  
                  <!-- USER AVATAR TEXT -->
                  <p class="user-avatar-text red">12</p>
                  <!-- /USER AVATAR TEXT -->
                </div>
                <!-- /USER AVATAR WRAP -->
  
                <!-- SKILL LOOT LIST -->
                <div class="skill-loot-list vertical">
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/skills/skill-13.png" alt="skill-13">
                  <!-- /SKILL LOOT ITEM -->
  
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/skills/skill-14.png" alt="skill-14">
                  <!-- /SKILL LOOT ITEM -->
                </div>
                <!-- SKILL LOOT LIST -->
  
                <!-- TEAM INFO -->
                <div class="team-info">
                  <p class="team-name">Striker15</p>
                  <p class="team-country">Bot | Support</p>
                </div>
                <!-- /TEAM INFO -->
              </div>
              <!-- /TEAM INFO WRAP -->
            </div>
            <!-- /TABLE ROW ITEM -->
          </div>
          <!-- /TABLE ROW -->
  
          <!-- TABLE ROW -->
          <div class="table-row big">
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <!-- TEAM INFO WRAP -->
              <div class="team-info-wrap medium">
                <!-- USER AVATAR WRAP -->
                <div class="user-avatar-wrap">
                  <!-- USER AVATAR -->
                  <img class="user-avatar character v2 blue" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/03.png" alt="character-03">
                  <!-- /USER AVATAR -->
  
                  <!-- USER AVATAR TEXT -->
                  <p class="user-avatar-text blue">16</p>
                  <!-- /USER AVATAR TEXT -->
                </div>
                <!-- /USER AVATAR WRAP -->
  
                <!-- SKILL LOOT LIST -->
                <div class="skill-loot-list vertical">
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/skills/skill-05.png" alt="skill-05">
                  <!-- /SKILL LOOT ITEM -->
  
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/skills/skill-06.png" alt="skill-06">
                  <!-- /SKILL LOOT ITEM -->
                </div>
                <!-- SKILL LOOT LIST -->
  
                <!-- TEAM INFO -->
                <div class="team-info">
                  <p class="team-name">Firestorm</p>
                  <p class="team-country">Bot | Carry</p>
                </div>
                <!-- /TEAM INFO -->
              </div>
              <!-- /TEAM INFO WRAP -->
            </div>
            <!-- /TABLE ROW ITEM -->
            
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder"><span class="highlight">11</span> / <span class="highlight">6</span> / <span class="highlight">10</span></p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">16109</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">267</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">1 11 3</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">58</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <!-- SKILL LOOT LIST -->
              <div class="skill-loot-list">
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-22.png" alt="item-22">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-23.png" alt="item-23">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-24.png" alt="item-24">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-25.png" alt="item-25">
                <!-- /SKILL LOOT ITEM -->
              </div>
              <!-- SKILL LOOT LIST -->
  
              <!-- SKILL LOOT LIST -->
              <div class="skill-loot-list">
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-27.png" alt="item-27">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-28.png" alt="item-28">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-29.png" alt="item-29">
                <!-- /SKILL LOOT ITEM -->
              </div>
              <!-- SKILL LOOT LIST -->
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <!-- SKILL LOOT LIST -->
              <div class="skill-loot-list">
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-29.png" alt="item-29">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-30.png" alt="item-30">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-31.png" alt="item-31">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-32.png" alt="item-32">
                <!-- /SKILL LOOT ITEM -->
              </div>
              <!-- SKILL LOOT LIST -->
  
              <!-- SKILL LOOT LIST -->
              <div class="skill-loot-list">
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-33.png" alt="item-33">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-34.png" alt="item-34">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-35.png" alt="item-35">
                <!-- /SKILL LOOT ITEM -->
              </div>
              <!-- SKILL LOOT LIST -->
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">44</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">2 12 4</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">178</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">11148</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder"><span class="highlight">3</span> / <span class="highlight">9</span> / <span class="highlight">9</span></p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <!-- TEAM INFO WRAP -->
              <div class="team-info-wrap medium inverted">
                <!-- USER AVATAR WRAP -->
                <div class="user-avatar-wrap">
                  <!-- USER AVATAR -->
                  <img class="user-avatar character v2 red" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/08.png" alt="character-08">
                  <!-- /USER AVATAR -->
  
                  <!-- USER AVATAR TEXT -->
                  <p class="user-avatar-text red">14</p>
                  <!-- /USER AVATAR TEXT -->
                </div>
                <!-- /USER AVATAR WRAP -->
  
                <!-- SKILL LOOT LIST -->
                <div class="skill-loot-list vertical">
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/skills/skill-15.png" alt="skill-15">
                  <!-- /SKILL LOOT ITEM -->
  
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/skills/skill-16.png" alt="skill-16">
                  <!-- /SKILL LOOT ITEM -->
                </div>
                <!-- SKILL LOOT LIST -->
  
                <!-- TEAM INFO -->
                <div class="team-info">
                  <p class="team-name">Arrowhead</p>
                  <p class="team-country">Top | Solo</p>
                </div>
                <!-- /TEAM INFO -->
              </div>
              <!-- /TEAM INFO WRAP -->
            </div>
            <!-- /TABLE ROW ITEM -->
          </div>
          <!-- /TABLE ROW -->
  
          <!-- TABLE ROW -->
          <div class="table-row big">
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <!-- TEAM INFO WRAP -->
              <div class="team-info-wrap medium">
                <!-- USER AVATAR WRAP -->
                <div class="user-avatar-wrap">
                  <!-- USER AVATAR -->
                  <img class="user-avatar character v2 blue" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/04.png" alt="character-04">
                  <!-- /USER AVATAR -->
  
                  <!-- USER AVATAR TEXT -->
                  <p class="user-avatar-text blue">16</p>
                  <!-- /USER AVATAR TEXT -->
                </div>
                <!-- /USER AVATAR WRAP -->
  
                <!-- SKILL LOOT LIST -->
                <div class="skill-loot-list vertical">
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/skills/skill-07.png" alt="skill-07">
                  <!-- /SKILL LOOT ITEM -->
  
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/skills/skill-08.png" alt="skill-08">
                  <!-- /SKILL LOOT ITEM -->
                </div>
                <!-- SKILL LOOT LIST -->
  
                <!-- TEAM INFO -->
                <div class="team-info">
                  <p class="team-name">DABLADE_NT</p>
                  <p class="team-country">Top | Solo</p>
                </div>
                <!-- /TEAM INFO -->
              </div>
              <!-- /TEAM INFO WRAP -->
            </div>
            <!-- /TABLE ROW ITEM -->
            
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder"><span class="highlight">8</span> / <span class="highlight">5</span> / <span class="highlight">17</span></p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">12840</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">174</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">2 12 6</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">69</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <!-- SKILL LOOT LIST -->
              <div class="skill-loot-list">
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-15.png" alt="item-15">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-16.png" alt="item-16">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-17.png" alt="item-17">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-18.png" alt="item-18">
                <!-- /SKILL LOOT ITEM -->
              </div>
              <!-- SKILL LOOT LIST -->
  
              <!-- SKILL LOOT LIST -->
              <div class="skill-loot-list">
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-19.png" alt="item-19">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-20.png" alt="item-20">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-21.png" alt="item-21">
                <!-- /SKILL LOOT ITEM -->
              </div>
              <!-- SKILL LOOT LIST -->
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <!-- SKILL LOOT LIST -->
              <div class="skill-loot-list">
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-22.png" alt="item-22">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-23.png" alt="item-23">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-24.png" alt="item-24">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-25.png" alt="item-25">
                <!-- /SKILL LOOT ITEM -->
              </div>
              <!-- SKILL LOOT LIST -->
  
              <!-- SKILL LOOT LIST -->
              <div class="skill-loot-list">
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-27.png" alt="item-27">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-28.png" alt="item-28">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-29.png" alt="item-29">
                <!-- /SKILL LOOT ITEM -->
              </div>
              <!-- SKILL LOOT LIST -->
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">51</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">3 8 6</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">207</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">13218</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder"><span class="highlight">8</span> / <span class="highlight">7</span> / <span class="highlight">6</span></p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <!-- TEAM INFO WRAP -->
              <div class="team-info-wrap medium inverted">
                <!-- USER AVATAR WRAP -->
                <div class="user-avatar-wrap">
                  <!-- USER AVATAR -->
                  <img class="user-avatar character v2 red" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/09.png" alt="character-09">
                  <!-- /USER AVATAR -->
  
                  <!-- USER AVATAR TEXT -->
                  <p class="user-avatar-text red">15</p>
                  <!-- /USER AVATAR TEXT -->
                </div>
                <!-- /USER AVATAR WRAP -->
  
                <!-- SKILL LOOT LIST -->
                <div class="skill-loot-list vertical">
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/skills/skill-17.png" alt="skill-17">
                  <!-- /SKILL LOOT ITEM -->
  
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/skills/skill-18.png" alt="skill-18">
                  <!-- /SKILL LOOT ITEM -->
                </div>
                <!-- SKILL LOOT LIST -->
  
                <!-- TEAM INFO -->
                <div class="team-info">
                  <p class="team-name">TheLightning</p>
                  <p class="team-country">Mid | Solo</p>
                </div>
                <!-- /TEAM INFO -->
              </div>
              <!-- /TEAM INFO WRAP -->
            </div>
            <!-- /TABLE ROW ITEM -->
          </div>
          <!-- /TABLE ROW -->
  
          <!-- TABLE ROW -->
          <div class="table-row big">
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <!-- TEAM INFO WRAP -->
              <div class="team-info-wrap medium">
                <!-- USER AVATAR WRAP -->
                <div class="user-avatar-wrap">
                  <!-- USER AVATAR -->
                  <img class="user-avatar character v2 blue" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/05.png" alt="character-05">
                  <!-- /USER AVATAR -->
  
                  <!-- USER AVATAR TEXT -->
                  <p class="user-avatar-text blue">14</p>
                  <!-- /USER AVATAR TEXT -->
                </div>
                <!-- /USER AVATAR WRAP -->
  
                <!-- SKILL LOOT LIST -->
                <div class="skill-loot-list vertical">
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/skills/skill-09.png" alt="skill-09">
                  <!-- /SKILL LOOT ITEM -->
  
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/skills/skill-10.png" alt="skill-10">
                  <!-- /SKILL LOOT ITEM -->
                </div>
                <!-- SKILL LOOT LIST -->
  
                <!-- TEAM INFO -->
                <div class="team-info">
                  <p class="team-name">Keymaster</p>
                  <p class="team-country">Jungle</p>
                </div>
                <!-- /TEAM INFO -->
              </div>
              <!-- /TEAM INFO WRAP -->
            </div>
            <!-- /TABLE ROW ITEM -->
            
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder"><span class="highlight">7</span> / <span class="highlight">6</span> / <span class="highlight">14</span></p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">11193</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">111</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">5 35 4</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">58</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <!-- SKILL LOOT LIST -->
              <div class="skill-loot-list">
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-29.png" alt="item-29">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-30.png" alt="item-30">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-31.png" alt="item-31">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-32.png" alt="item-32">
                <!-- /SKILL LOOT ITEM -->
              </div>
              <!-- SKILL LOOT LIST -->
  
              <!-- SKILL LOOT LIST -->
              <div class="skill-loot-list">
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-33.png" alt="item-33">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-34.png" alt="item-34">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-35.png" alt="item-35">
                <!-- /SKILL LOOT ITEM -->
              </div>
              <!-- SKILL LOOT LIST -->
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <!-- SKILL LOOT LIST -->
              <div class="skill-loot-list">
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-15.png" alt="item-15">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-16.png" alt="item-16">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-17.png" alt="item-17">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-18.png" alt="item-18">
                <!-- /SKILL LOOT ITEM -->
              </div>
              <!-- SKILL LOOT LIST -->
  
              <!-- SKILL LOOT LIST -->
              <div class="skill-loot-list">
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-19.png" alt="item-19">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-20.png" alt="item-20">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-21.png" alt="item-21">
                <!-- /SKILL LOOT ITEM -->
              </div>
              <!-- SKILL LOOT LIST -->
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">59</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">2 26 7</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">156</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">11189</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder"><span class="highlight">7</span> / <span class="highlight">7</span> / <span class="highlight">9</span></p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <!-- TEAM INFO WRAP -->
              <div class="team-info-wrap medium inverted">
                <!-- USER AVATAR WRAP -->
                <div class="user-avatar-wrap">
                  <!-- USER AVATAR -->
                  <img class="user-avatar character v2 red" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/10.png" alt="character-10">
                  <!-- /USER AVATAR -->
  
                  <!-- USER AVATAR TEXT -->
                  <p class="user-avatar-text red">13</p>
                  <!-- /USER AVATAR TEXT -->
                </div>
                <!-- /USER AVATAR WRAP -->
  
                <!-- SKILL LOOT LIST -->
                <div class="skill-loot-list vertical">
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/skills/skill-19.png" alt="skill-19">
                  <!-- /SKILL LOOT ITEM -->
  
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/skills/skill-20.png" alt="skill-20">
                  <!-- /SKILL LOOT ITEM -->
                </div>
                <!-- SKILL LOOT LIST -->
  
                <!-- TEAM INFO -->
                <div class="team-info">
                  <p class="team-name">PXSlasher</p>
                  <p class="team-country">Jungle</p>
                </div>
                <!-- /TEAM INFO -->
              </div>
              <!-- /TEAM INFO WRAP -->
            </div>
            <!-- /TABLE ROW ITEM -->
          </div>
          <!-- /TABLE ROW -->
        </div>
        <!-- /TABLE ROWS -->
      </div>
      <!-- /TABLE -->
  
      <!-- WIDGET ROW -->
      <div class="widget-row filled full">
        <!-- BAN LIST WRAP -->
        <div class="ban-list-wrap">
          <!-- BAN LIST TITLE -->
          <p class="ban-list-title">Team Bans</p>
          <!-- /BAN LIST TITLE -->
  
          <!-- BAN LIST -->
          <div class="ban-list">
            <!-- BAN LIST ITEM -->
            <img class="ban-list-item user-avatar micro" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/09.png" alt="character-09">
            <!-- /BAN LIST ITEM -->
  
            <!-- BAN LIST ITEM -->
            <img class="ban-list-item user-avatar micro" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/07.png" alt="character-07">
            <!-- /BAN LIST ITEM -->
  
            <!-- BAN LIST ITEM -->
            <img class="ban-list-item user-avatar micro" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/10.png" alt="character-10">
            <!-- /BAN LIST ITEM -->
  
            <!-- BAN LIST ITEM -->
            <img class="ban-list-item user-avatar micro" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/08.png" alt="character-08">
            <!-- /BAN LIST ITEM -->
  
            <!-- BAN LIST ITEM -->
            <img class="ban-list-item user-avatar micro" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/06.png" alt="character-06">
            <!-- /BAN LIST ITEM -->
          </div>
          <!-- /BAN LIST -->
        </div>
        <!-- /BAN LIST WRAP -->
  
        <!-- BAN LIST WRAP -->
        <div class="ban-list-wrap inverted">
          <!-- BAN LIST TITLE -->
          <p class="ban-list-title">Team Bans</p>
          <!-- /BAN LIST TITLE -->
  
          <!-- BAN LIST -->
          <div class="ban-list">
            <!-- BAN LIST ITEM -->
            <img class="ban-list-item user-avatar micro" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/03.png" alt="character-03">
            <!-- /BAN LIST ITEM -->
  
            <!-- BAN LIST ITEM -->
            <img class="ban-list-item user-avatar micro" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/02.png" alt="character-02">
            <!-- /BAN LIST ITEM -->
  
            <!-- BAN LIST ITEM -->
            <img class="ban-list-item user-avatar micro" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/04.png" alt="character-04">
            <!-- /BAN LIST ITEM -->
  
            <!-- BAN LIST ITEM -->
            <img class="ban-list-item user-avatar micro" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/01.png" alt="character-01">
            <!-- /BAN LIST ITEM -->
  
            <!-- BAN LIST ITEM -->
            <img class="ban-list-item user-avatar micro" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/05.png" alt="character-05">
            <!-- /BAN LIST ITEM -->
          </div>
          <!-- /BAN LIST -->
        </div>
        <!-- /BAN LIST WRAP -->
      </div>
      <!-- /WIDGET ROW -->
  
      <!-- TEAM LINEUPS HEADER -->
      <div class="team-lineups-header medium mobile">
        <!-- TEAM INFO WRAP -->
        <div class="team-info-wrap mid">
          <!-- TEAM LOGO -->
          <img class="team-logo mid" src="<?php echo get_stylesheet_directory_uri()?>/img/teams/logos/01.png" alt="logo-01">
          <!-- /TEAM LOGO -->
          
          <!-- TEAM INFO -->
          <div class="team-info">
            <p class="team-name">TLW | <span class="highlight team-blue">Victory</span></p>
            <p class="team-country">United States</p>
          </div>
          <!-- /TEAM INFO -->
        </div>
        <!-- /TEAM INFO WRAP -->
  
        <!-- FEATURED STAT WRAP -->
        <div class="featured-stat-wrap multiple-items">
          <!-- TOWER ICON -->
          <svg class="featured-stat-icon tower-icon blue">
            <use xlink:href="#svg-tower"></use>
          </svg>
          <!-- /TOWER ICON -->
  
          <!-- FEATURED STAT TITLE -->
          <p class="featured-stat-title">7</p>
          <!-- /FEATURED STAT TITLE -->
        </div>
        <!-- /FEATURED STAT WRAP -->
  
        <!-- FEATURED STAT WRAP -->
        <div class="featured-stat-wrap multiple-items">
          <!-- INHIBITOR ICON -->
          <svg class="featured-stat-icon inhibitor-icon blue">
            <use xlink:href="#svg-inhibitor"></use>
          </svg>
          <!-- /INHIBITOR ICON -->
  
          <!-- FEATURED STAT TITLE -->
          <p class="featured-stat-title">0</p>
          <!-- /FEATURED STAT TITLE -->
        </div>
        <!-- /FEATURED STAT WRAP -->
  
        <!-- FEATURED STAT WRAP -->
        <div class="featured-stat-wrap multiple-items">
          <!-- BARON ICON -->
          <svg class="featured-stat-icon baron-icon blue">
            <use xlink:href="#svg-baron"></use>
          </svg>
          <!-- /BARON ICON -->
  
          <!-- FEATURED STAT TITLE -->
          <p class="featured-stat-title">1</p>
          <!-- /FEATURED STAT TITLE -->
        </div>
        <!-- /FEATURED STAT WRAP -->
  
        <!-- FEATURED STAT WRAP -->
        <div class="featured-stat-wrap multiple-items">
          <!-- DRAGON ICON -->
          <svg class="featured-stat-icon dragon-icon blue">
            <use xlink:href="#svg-dragon"></use>
          </svg>
          <!-- /DRAGON ICON -->
        
          <!-- FEATURED STAT TITLE -->
          <p class="featured-stat-title">1</p>
          <!-- /FEATURED STAT TITLE -->
        </div>
        <!-- /FEATURED STAT WRAP -->
  
        <!-- FEATURED STAT WRAP -->
        <div class="featured-stat-wrap multiple-items">
          <!-- RIFT HERALD ICON -->
          <svg class="featured-stat-icon rift-herald-icon blue">
            <use xlink:href="#svg-rift-herald"></use>
          </svg>
          <!-- /RIFT HERALD ICON -->
  
          <!-- FEATURED STAT TITLE -->
          <p class="featured-stat-title">0</p>
          <!-- /FEATURED STAT TITLE -->
        </div>
        <!-- /FEATURED STAT WRAP -->
  
        <!-- FEATURED STAT WRAP -->
        <div class="featured-stat-wrap regular right">
          <!-- FEATURED STAT TITLE -->
          <p class="featured-stat-title"><span class="highlight">36</span> / <span class="highlight">27</span> / <span class="highlight">70</span></p>
          <!-- /FEATURED STAT TITLE -->
  
          <!-- FEATURED STAT TEXT -->
          <p class="featured-stat-text">K / D / A</p>
          <!-- /FEATURED STAT TEXT -->
        </div>
        <!-- /FEATURED STAT WRAP -->
      </div>
      <!-- /TEAM LINEUPS HEADER -->
  
      <!-- TABLE -->
      <div class="table lineups full-stats mobile">
        <!-- TABLE ROW HEADER -->
        <div class="table-row-header big bordered colored">
          <!-- TABLE ROW HEADER ITEM -->
          <div class="table-row-header-item left">
            <p class="table-row-header-title">Character / Player</p>
          </div>
          <!-- /TABLE ROW HEADER ITEM -->
  
          <!-- TABLE ROW HEADER ITEM -->
          <div class="table-row-header-item padded">
            <p class="table-row-header-title">K/D/A</p>
          </div>
          <!-- /TABLE ROW HEADER ITEM -->
  
          <!-- TABLE ROW HEADER ITEM -->
          <div class="table-row-header-item padded">
            <p class="table-row-header-title">Gold</p>
          </div>
          <!-- /TABLE ROW HEADER ITEM -->
  
          <!-- TABLE ROW HEADER ITEM -->
          <div class="table-row-header-item padded">
            <p class="table-row-header-title">CS</p>
          </div>
          <!-- /TABLE ROW HEADER ITEM -->
  
          <!-- TABLE ROW HEADER ITEM -->
          <div class="table-row-header-item padded">
            <p class="table-row-header-title">Wards</p>
          </div>
          <!-- /TABLE ROW HEADER ITEM -->
  
          <!-- TABLE ROW HEADER ITEM -->
          <div class="table-row-header-item padded">
            <p class="table-row-header-title">K%</p>
          </div>
          <!-- /TABLE ROW HEADER ITEM -->
  
          <!-- TABLE ROW HEADER ITEM -->
          <div class="table-row-header-item"></div>
          <!-- /TABLE ROW HEADER ITEM -->
        </div>
        <!-- /TABLE ROW HEADER -->
  
        <!-- TABLE ROWS -->
        <div class="table-rows no-color">
          <!-- TABLE ROW -->
          <div class="table-row big">
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <!-- TEAM INFO WRAP -->
              <div class="team-info-wrap medium">
                <!-- USER AVATAR WRAP -->
                <div class="user-avatar-wrap">
                  <!-- USER AVATAR -->
                  <img class="user-avatar character v2 blue" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/01.png" alt="character-01">
                  <!-- /USER AVATAR -->
  
                  <!-- USER AVATAR TEXT -->
                  <p class="user-avatar-text blue">16</p>
                  <!-- /USER AVATAR TEXT -->
                </div>
                <!-- /USER AVATAR WRAP -->
  
                <!-- SKILL LOOT LIST -->
                <div class="skill-loot-list vertical">
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/skills/skill-01.png" alt="skill-01">
                  <!-- /SKILL LOOT ITEM -->
  
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/skills/skill-02.png" alt="skill-02">
                  <!-- /SKILL LOOT ITEM -->
                </div>
                <!-- SKILL LOOT LIST -->
  
                <!-- TEAM INFO -->
                <div class="team-info">
                  <p class="team-name">Joystickz-70</p>
                  <p class="team-country">Mid | Solo</p>
                </div>
                <!-- /TEAM INFO -->
              </div>
              <!-- /TEAM INFO WRAP -->
            </div>
            <!-- /TABLE ROW ITEM -->
            
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder"><span class="highlight">9</span> / <span class="highlight">4</span> / <span class="highlight">8</span></p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">12934</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">183</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">0 25 2</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">47</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <!-- SKILL LOOT LIST -->
              <div class="skill-loot-list">
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-01.png" alt="item-01">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-02.png" alt="item-02">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-03.png" alt="item-03">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-04.png" alt="item-04">
                <!-- /SKILL LOOT ITEM -->
              </div>
              <!-- SKILL LOOT LIST -->
  
              <!-- SKILL LOOT LIST -->
              <div class="skill-loot-list">
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-05.png" alt="item-05">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-06.png" alt="item-06">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-07.png" alt="item-07">
                <!-- /SKILL LOOT ITEM -->
              </div>
              <!-- SKILL LOOT LIST -->
            </div>
            <!-- /TABLE ROW ITEM -->
          </div>
          <!-- /TABLE ROW -->
  
          <!-- TABLE ROW -->
          <div class="table-row big">
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <!-- TEAM INFO WRAP -->
              <div class="team-info-wrap medium">
                <!-- USER AVATAR WRAP -->
                <div class="user-avatar-wrap">
                  <!-- USER AVATAR -->
                  <img class="user-avatar character v2 blue" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/02.png" alt="character-02">
                  <!-- /USER AVATAR -->
  
                  <!-- USER AVATAR TEXT -->
                  <p class="user-avatar-text blue">14</p>
                  <!-- /USER AVATAR TEXT -->
                </div>
                <!-- /USER AVATAR WRAP -->
  
                <!-- SKILL LOOT LIST -->
                <div class="skill-loot-list vertical">
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/skills/skill-03.png" alt="skill-03">
                  <!-- /SKILL LOOT ITEM -->
  
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/skills/skill-04.png" alt="skill-04">
                  <!-- /SKILL LOOT ITEM -->
                </div>
                <!-- SKILL LOOT LIST -->
  
                <!-- TEAM INFO -->
                <div class="team-info">
                  <p class="team-name">Dr.Chaos</p>
                  <p class="team-country">Bot | Support</p>
                </div>
                <!-- /TEAM INFO -->
              </div>
              <!-- /TEAM INFO WRAP -->
            </div>
            <!-- /TABLE ROW ITEM -->
            
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder"><span class="highlight">1</span> / <span class="highlight">6</span> / <span class="highlight">21</span></p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">9573</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">11</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">4 27 4</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">61</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <!-- SKILL LOOT LIST -->
              <div class="skill-loot-list">
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-08.png" alt="item-08">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-09.png" alt="item-09">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-10.png" alt="item-10">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-11.png" alt="item-11">
                <!-- /SKILL LOOT ITEM -->
              </div>
              <!-- SKILL LOOT LIST -->
  
              <!-- SKILL LOOT LIST -->
              <div class="skill-loot-list">
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-12.png" alt="item-12">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-13.png" alt="item-13">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-14.png" alt="item-14">
                <!-- /SKILL LOOT ITEM -->
              </div>
              <!-- SKILL LOOT LIST -->
            </div>
            <!-- /TABLE ROW ITEM -->
          </div>
          <!-- /TABLE ROW -->
  
          <!-- TABLE ROW -->
          <div class="table-row big">
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <!-- TEAM INFO WRAP -->
              <div class="team-info-wrap medium">
                <!-- USER AVATAR WRAP -->
                <div class="user-avatar-wrap">
                  <!-- USER AVATAR -->
                  <img class="user-avatar character v2 blue" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/03.png" alt="character-03">
                  <!-- /USER AVATAR -->
  
                  <!-- USER AVATAR TEXT -->
                  <p class="user-avatar-text blue">16</p>
                  <!-- /USER AVATAR TEXT -->
                </div>
                <!-- /USER AVATAR WRAP -->
  
                <!-- SKILL LOOT LIST -->
                <div class="skill-loot-list vertical">
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/skills/skill-05.png" alt="skill-05">
                  <!-- /SKILL LOOT ITEM -->
  
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/skills/skill-06.png" alt="skill-06">
                  <!-- /SKILL LOOT ITEM -->
                </div>
                <!-- SKILL LOOT LIST -->
  
                <!-- TEAM INFO -->
                <div class="team-info">
                  <p class="team-name">Firestorm</p>
                  <p class="team-country">Bot | Carry</p>
                </div>
                <!-- /TEAM INFO -->
              </div>
              <!-- /TEAM INFO WRAP -->
            </div>
            <!-- /TABLE ROW ITEM -->
            
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder"><span class="highlight">11</span> / <span class="highlight">6</span> / <span class="highlight">10</span></p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">16109</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">267</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">1 11 3</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">58</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <!-- SKILL LOOT LIST -->
              <div class="skill-loot-list">
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-22.png" alt="item-22">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-23.png" alt="item-23">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-24.png" alt="item-24">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-25.png" alt="item-25">
                <!-- /SKILL LOOT ITEM -->
              </div>
              <!-- SKILL LOOT LIST -->
  
              <!-- SKILL LOOT LIST -->
              <div class="skill-loot-list">
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-27.png" alt="item-27">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-28.png" alt="item-28">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-29.png" alt="item-29">
                <!-- /SKILL LOOT ITEM -->
              </div>
              <!-- SKILL LOOT LIST -->
            </div>
            <!-- /TABLE ROW ITEM -->
          </div>
          <!-- /TABLE ROW -->
  
          <!-- TABLE ROW -->
          <div class="table-row big">
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <!-- TEAM INFO WRAP -->
              <div class="team-info-wrap medium">
                <!-- USER AVATAR WRAP -->
                <div class="user-avatar-wrap">
                  <!-- USER AVATAR -->
                  <img class="user-avatar character v2 blue" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/04.png" alt="character-04">
                  <!-- /USER AVATAR -->
  
                  <!-- USER AVATAR TEXT -->
                  <p class="user-avatar-text blue">16</p>
                  <!-- /USER AVATAR TEXT -->
                </div>
                <!-- /USER AVATAR WRAP -->
  
                <!-- SKILL LOOT LIST -->
                <div class="skill-loot-list vertical">
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/skills/skill-07.png" alt="skill-07">
                  <!-- /SKILL LOOT ITEM -->
  
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/skills/skill-08.png" alt="skill-08">
                  <!-- /SKILL LOOT ITEM -->
                </div>
                <!-- SKILL LOOT LIST -->
  
                <!-- TEAM INFO -->
                <div class="team-info">
                  <p class="team-name">DABLADE_NT</p>
                  <p class="team-country">Top | Solo</p>
                </div>
                <!-- /TEAM INFO -->
              </div>
              <!-- /TEAM INFO WRAP -->
            </div>
            <!-- /TABLE ROW ITEM -->
            
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder"><span class="highlight">8</span> / <span class="highlight">5</span> / <span class="highlight">17</span></p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">12840</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">174</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">2 12 6</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">69</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <!-- SKILL LOOT LIST -->
              <div class="skill-loot-list">
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-15.png" alt="item-15">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-16.png" alt="item-16">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-17.png" alt="item-17">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-18.png" alt="item-18">
                <!-- /SKILL LOOT ITEM -->
              </div>
              <!-- SKILL LOOT LIST -->
  
              <!-- SKILL LOOT LIST -->
              <div class="skill-loot-list">
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-19.png" alt="item-19">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-20.png" alt="item-20">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-21.png" alt="item-21">
                <!-- /SKILL LOOT ITEM -->
              </div>
              <!-- SKILL LOOT LIST -->
            </div>
            <!-- /TABLE ROW ITEM -->
          </div>
          <!-- /TABLE ROW -->
  
          <!-- TABLE ROW -->
          <div class="table-row big">
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <!-- TEAM INFO WRAP -->
              <div class="team-info-wrap medium">
                <!-- USER AVATAR WRAP -->
                <div class="user-avatar-wrap">
                  <!-- USER AVATAR -->
                  <img class="user-avatar character v2 blue" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/05.png" alt="character-05">
                  <!-- /USER AVATAR -->
  
                  <!-- USER AVATAR TEXT -->
                  <p class="user-avatar-text blue">14</p>
                  <!-- /USER AVATAR TEXT -->
                </div>
                <!-- /USER AVATAR WRAP -->
  
                <!-- SKILL LOOT LIST -->
                <div class="skill-loot-list vertical">
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/skills/skill-09.png" alt="skill-09">
                  <!-- /SKILL LOOT ITEM -->
  
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/skills/skill-10.png" alt="skill-10">
                  <!-- /SKILL LOOT ITEM -->
                </div>
                <!-- SKILL LOOT LIST -->
  
                <!-- TEAM INFO -->
                <div class="team-info">
                  <p class="team-name">Keymaster</p>
                  <p class="team-country">Jungle</p>
                </div>
                <!-- /TEAM INFO -->
              </div>
              <!-- /TEAM INFO WRAP -->
            </div>
            <!-- /TABLE ROW ITEM -->
            
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder"><span class="highlight">7</span> / <span class="highlight">6</span> / <span class="highlight">14</span></p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">11193</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">111</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">5 35 4</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">58</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <!-- SKILL LOOT LIST -->
              <div class="skill-loot-list">
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-29.png" alt="item-29">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-30.png" alt="item-30">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-31.png" alt="item-31">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-32.png" alt="item-32">
                <!-- /SKILL LOOT ITEM -->
              </div>
              <!-- SKILL LOOT LIST -->
  
              <!-- SKILL LOOT LIST -->
              <div class="skill-loot-list">
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-33.png" alt="item-33">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-34.png" alt="item-34">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-35.png" alt="item-35">
                <!-- /SKILL LOOT ITEM -->
              </div>
              <!-- SKILL LOOT LIST -->
            </div>
            <!-- /TABLE ROW ITEM -->
          </div>
          <!-- /TABLE ROW -->
        </div>
        <!-- /TABLE ROWS -->
      </div>
      <!-- /TABLE -->
  
      <!-- WIDGET ROW -->
      <div class="widget-row filled mobile">
        <!-- BAN LIST WRAP -->
        <div class="ban-list-wrap">
          <!-- BAN LIST TITLE -->
          <p class="ban-list-title">Team Bans</p>
          <!-- /BAN LIST TITLE -->
  
          <!-- BAN LIST -->
          <div class="ban-list">
            <!-- BAN LIST ITEM -->
            <img class="ban-list-item user-avatar micro" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/09.png" alt="character-09">
            <!-- /BAN LIST ITEM -->
  
            <!-- BAN LIST ITEM -->
            <img class="ban-list-item user-avatar micro" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/07.png" alt="character-07">
            <!-- /BAN LIST ITEM -->
  
            <!-- BAN LIST ITEM -->
            <img class="ban-list-item user-avatar micro" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/10.png" alt="character-10">
            <!-- /BAN LIST ITEM -->
  
            <!-- BAN LIST ITEM -->
            <img class="ban-list-item user-avatar micro" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/08.png" alt="character-08">
            <!-- /BAN LIST ITEM -->
  
            <!-- BAN LIST ITEM -->
            <img class="ban-list-item user-avatar micro" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/06.png" alt="character-06">
            <!-- /BAN LIST ITEM -->
          </div>
          <!-- /BAN LIST -->
        </div>
        <!-- /BAN LIST WRAP -->
      </div>
      <!-- /WIDGET ROW -->
  
      <!-- TEAM LINEUPS HEADER -->
      <div class="team-lineups-header medium mobile">
        <!-- TEAM INFO WRAP -->
        <div class="team-info-wrap mid">
          <!-- TEAM LOGO -->
          <img class="team-logo mid" src="<?php echo get_stylesheet_directory_uri()?>/img/teams/logos/02.png" alt="logo-02">
          <!-- /TEAM LOGO -->
          
          <!-- TEAM INFO -->
          <div class="team-info">
            <p class="team-name">RRH | <span class="highlight red">Defeat</span></p>
            <p class="team-country">South Africa</p>
          </div>
          <!-- /TEAM INFO -->
        </div>
        <!-- /TEAM INFO WRAP -->
  
        <!-- FEATURED STAT WRAP -->
        <div class="featured-stat-wrap multiple-items">
          <!-- TOWER ICON -->
          <svg class="featured-stat-icon tower-icon red">
            <use xlink:href="#svg-tower"></use>
          </svg>
          <!-- /TOWER ICON -->
  
          <!-- FEATURED STAT TITLE -->
          <p class="featured-stat-title">3</p>
          <!-- /FEATURED STAT TITLE -->
        </div>
        <!-- /FEATURED STAT WRAP -->
  
        <!-- FEATURED STAT WRAP -->
        <div class="featured-stat-wrap multiple-items">
          <!-- INHIBITOR ICON -->
          <svg class="featured-stat-icon inhibitor-icon red">
            <use xlink:href="#svg-inhibitor"></use>
          </svg>
          <!-- /INHIBITOR ICON -->
  
          <!-- FEATURED STAT TITLE -->
          <p class="featured-stat-title">0</p>
          <!-- /FEATURED STAT TITLE -->
        </div>
        <!-- /FEATURED STAT WRAP -->
  
        <!-- FEATURED STAT WRAP -->
        <div class="featured-stat-wrap multiple-items">
          <!-- BARON ICON -->
          <svg class="featured-stat-icon baron-icon red">
            <use xlink:href="#svg-baron"></use>
          </svg>
          <!-- /BARON ICON -->
  
          <!-- FEATURED STAT TITLE -->
          <p class="featured-stat-title">1</p>
          <!-- /FEATURED STAT TITLE -->
        </div>
        <!-- /FEATURED STAT WRAP -->
  
        <!-- FEATURED STAT WRAP -->
        <div class="featured-stat-wrap multiple-items">
          <!-- DRAGON ICON -->
          <svg class="featured-stat-icon dragon-icon red">
            <use xlink:href="#svg-dragon"></use>
          </svg>
          <!-- /DRAGON ICON -->
        
          <!-- FEATURED STAT TITLE -->
          <p class="featured-stat-title">2</p>
          <!-- /FEATURED STAT TITLE -->
        </div>
        <!-- /FEATURED STAT WRAP -->
  
        <!-- FEATURED STAT WRAP -->
        <div class="featured-stat-wrap multiple-items">
          <!-- RIFT HERALD ICON -->
          <svg class="featured-stat-icon rift-herald-icon red">
            <use xlink:href="#svg-rift-herald"></use>
          </svg>
          <!-- /RIFT HERALD ICON -->
  
          <!-- FEATURED STAT TITLE -->
          <p class="featured-stat-title">0</p>
          <!-- /FEATURED STAT TITLE -->
        </div>
        <!-- /FEATURED STAT WRAP -->
  
        <!-- FEATURED STAT WRAP -->
        <div class="featured-stat-wrap regular right">
          <!-- FEATURED STAT TITLE -->
          <p class="featured-stat-title void"><span class="highlight">27</span> / <span class="highlight">37</span> / <span class="highlight">31</span></p>
          <!-- /FEATURED STAT TITLE -->
  
          <!-- FEATURED STAT TEXT -->
          <p class="featured-stat-text">K / D / A</p>
          <!-- /FEATURED STAT TEXT -->
        </div>
        <!-- /FEATURED STAT WRAP -->
      </div>
      <!-- /TEAM LINEUPS HEADER -->
  
      <!-- TABLE -->
      <div class="table lineups full-stats mobile">
        <!-- TABLE ROW HEADER -->
        <div class="table-row-header big bordered colored">
          <!-- TABLE ROW HEADER ITEM -->
          <div class="table-row-header-item left">
            <p class="table-row-header-title">Character / Player</p>
          </div>
          <!-- /TABLE ROW HEADER ITEM -->
  
          <!-- TABLE ROW HEADER ITEM -->
          <div class="table-row-header-item padded">
            <p class="table-row-header-title">K/D/A</p>
          </div>
          <!-- /TABLE ROW HEADER ITEM -->
  
          <!-- TABLE ROW HEADER ITEM -->
          <div class="table-row-header-item padded">
            <p class="table-row-header-title">Gold</p>
          </div>
          <!-- /TABLE ROW HEADER ITEM -->
  
          <!-- TABLE ROW HEADER ITEM -->
          <div class="table-row-header-item padded">
            <p class="table-row-header-title">CS</p>
          </div>
          <!-- /TABLE ROW HEADER ITEM -->
  
          <!-- TABLE ROW HEADER ITEM -->
          <div class="table-row-header-item padded">
            <p class="table-row-header-title">Wards</p>
          </div>
          <!-- /TABLE ROW HEADER ITEM -->
  
          <!-- TABLE ROW HEADER ITEM -->
          <div class="table-row-header-item padded">
            <p class="table-row-header-title">K%</p>
          </div>
          <!-- /TABLE ROW HEADER ITEM -->
  
          <!-- TABLE ROW HEADER ITEM -->
          <div class="table-row-header-item"></div>
          <!-- /TABLE ROW HEADER ITEM -->
        </div>
        <!-- /TABLE ROW HEADER -->
  
        <!-- TABLE ROWS -->
        <div class="table-rows no-color">
          <!-- TABLE ROW -->
          <div class="table-row big">
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <!-- TEAM INFO WRAP -->
              <div class="team-info-wrap medium">
                <!-- USER AVATAR WRAP -->
                <div class="user-avatar-wrap">
                  <!-- USER AVATAR -->
                  <img class="user-avatar character v2 red" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/06.png" alt="character-06">
                  <!-- /USER AVATAR -->
  
                  <!-- USER AVATAR TEXT -->
                  <p class="user-avatar-text red">14</p>
                  <!-- /USER AVATAR TEXT -->
                </div>
                <!-- /USER AVATAR WRAP -->
  
                <!-- SKILL LOOT LIST -->
                <div class="skill-loot-list vertical">
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/skills/skill-11.png" alt="skill-11">
                  <!-- /SKILL LOOT ITEM -->
  
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/skills/skill-12.png" alt="skill-12">
                  <!-- /SKILL LOOT ITEM -->
                </div>
                <!-- SKILL LOOT LIST -->
  
                <!-- TEAM INFO -->
                <div class="team-info">
                  <p class="team-name">Pixelus.GD</p>
                  <p class="team-country">Bot | Carry</p>
                </div>
                <!-- /TEAM INFO -->
              </div>
              <!-- /TEAM INFO WRAP -->
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder"><span class="highlight">7</span> / <span class="highlight">5</span> / <span class="highlight">3</span></p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">11973</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">211</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">1 10 9</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">37</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <!-- SKILL LOOT LIST -->
              <div class="skill-loot-list">
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-08.png" alt="item-08">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-09.png" alt="item-09">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-10.png" alt="item-10">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-11.png" alt="item-11">
                <!-- /SKILL LOOT ITEM -->
              </div>
              <!-- SKILL LOOT LIST -->
  
              <!-- SKILL LOOT LIST -->
              <div class="skill-loot-list">
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-12.png" alt="item-12">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-13.png" alt="item-13">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-14.png" alt="item-14">
                <!-- /SKILL LOOT ITEM -->
              </div>
              <!-- SKILL LOOT LIST -->
            </div>
            <!-- /TABLE ROW ITEM -->
          </div>
          <!-- /TABLE ROW -->
  
          <!-- TABLE ROW -->
          <div class="table-row big">
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <!-- TEAM INFO WRAP -->
              <div class="team-info-wrap medium">
                <!-- USER AVATAR WRAP -->
                <div class="user-avatar-wrap">
                  <!-- USER AVATAR -->
                  <img class="user-avatar character v2 red" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/07.png" alt="character-07">
                  <!-- /USER AVATAR -->
  
                  <!-- USER AVATAR TEXT -->
                  <p class="user-avatar-text red">12</p>
                  <!-- /USER AVATAR TEXT -->
                </div>
                <!-- /USER AVATAR WRAP -->
  
                <!-- SKILL LOOT LIST -->
                <div class="skill-loot-list vertical">
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/skills/skill-13.png" alt="skill-13">
                  <!-- /SKILL LOOT ITEM -->
  
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/skills/skill-14.png" alt="skill-14">
                  <!-- /SKILL LOOT ITEM -->
                </div>
                <!-- SKILL LOOT LIST -->
  
                <!-- TEAM INFO -->
                <div class="team-info">
                  <p class="team-name">Striker15</p>
                  <p class="team-country">Bot | Support</p>
                </div>
                <!-- /TEAM INFO -->
              </div>
              <!-- /TEAM INFO WRAP -->
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder"><span class="highlight">2</span> / <span class="highlight">9</span> / <span class="highlight">4</span></p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">8913</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">57</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">4 22 7</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">22</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <!-- SKILL LOOT LIST -->
              <div class="skill-loot-list">
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-01.png" alt="item-01">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-02.png" alt="item-02">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-03.png" alt="item-03">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-04.png" alt="item-04">
                <!-- /SKILL LOOT ITEM -->
              </div>
              <!-- SKILL LOOT LIST -->
  
              <!-- SKILL LOOT LIST -->
              <div class="skill-loot-list">
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-05.png" alt="item-05">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-06.png" alt="item-06">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-07.png" alt="item-07">
                <!-- /SKILL LOOT ITEM -->
              </div>
              <!-- SKILL LOOT LIST -->
            </div>
            <!-- /TABLE ROW ITEM -->
          </div>
          <!-- /TABLE ROW -->
  
          <!-- TABLE ROW -->
          <div class="table-row big">
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <!-- TEAM INFO WRAP -->
              <div class="team-info-wrap medium">
                <!-- USER AVATAR WRAP -->
                <div class="user-avatar-wrap">
                  <!-- USER AVATAR -->
                  <img class="user-avatar character v2 red" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/08.png" alt="character-08">
                  <!-- /USER AVATAR -->
  
                  <!-- USER AVATAR TEXT -->
                  <p class="user-avatar-text red">14</p>
                  <!-- /USER AVATAR TEXT -->
                </div>
                <!-- /USER AVATAR WRAP -->
  
                <!-- SKILL LOOT LIST -->
                <div class="skill-loot-list vertical">
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/skills/skill-15.png" alt="skill-15">
                  <!-- /SKILL LOOT ITEM -->
  
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/skills/skill-16.png" alt="skill-16">
                  <!-- /SKILL LOOT ITEM -->
                </div>
                <!-- SKILL LOOT LIST -->
  
                <!-- TEAM INFO -->
                <div class="team-info">
                  <p class="team-name">Arrowhead</p>
                  <p class="team-country">Top | Solo</p>
                </div>
                <!-- /TEAM INFO -->
              </div>
              <!-- /TEAM INFO WRAP -->
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder"><span class="highlight">3</span> / <span class="highlight">9</span> / <span class="highlight">9</span></p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">11148</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">178</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">2 12 4</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">44</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <!-- SKILL LOOT LIST -->
              <div class="skill-loot-list">
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-29.png" alt="item-29">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-30.png" alt="item-30">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-31.png" alt="item-31">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-32.png" alt="item-32">
                <!-- /SKILL LOOT ITEM -->
              </div>
              <!-- SKILL LOOT LIST -->
  
              <!-- SKILL LOOT LIST -->
              <div class="skill-loot-list">
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-33.png" alt="item-33">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-34.png" alt="item-34">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-35.png" alt="item-35">
                <!-- /SKILL LOOT ITEM -->
              </div>
              <!-- SKILL LOOT LIST -->
            </div>
            <!-- /TABLE ROW ITEM -->
          </div>
          <!-- /TABLE ROW -->
  
          <!-- TABLE ROW -->
          <div class="table-row big">
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <!-- TEAM INFO WRAP -->
              <div class="team-info-wrap medium">
                <!-- USER AVATAR WRAP -->
                <div class="user-avatar-wrap">
                  <!-- USER AVATAR -->
                  <img class="user-avatar character v2 red" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/09.png" alt="character-09">
                  <!-- /USER AVATAR -->
  
                  <!-- USER AVATAR TEXT -->
                  <p class="user-avatar-text red">15</p>
                  <!-- /USER AVATAR TEXT -->
                </div>
                <!-- /USER AVATAR WRAP -->
  
                <!-- SKILL LOOT LIST -->
                <div class="skill-loot-list vertical">
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/skills/skill-17.png" alt="skill-17">
                  <!-- /SKILL LOOT ITEM -->
  
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/skills/skill-18.png" alt="skill-18">
                  <!-- /SKILL LOOT ITEM -->
                </div>
                <!-- SKILL LOOT LIST -->
  
                <!-- TEAM INFO -->
                <div class="team-info">
                  <p class="team-name">TheLightning</p>
                  <p class="team-country">Mid | Solo</p>
                </div>
                <!-- /TEAM INFO -->
              </div>
              <!-- /TEAM INFO WRAP -->
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder"><span class="highlight">8</span> / <span class="highlight">7</span> / <span class="highlight">6</span></p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">13218</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">207</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">3 8 6</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">51</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <!-- SKILL LOOT LIST -->
              <div class="skill-loot-list">
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-22.png" alt="item-22">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-23.png" alt="item-23">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-24.png" alt="item-24">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-25.png" alt="item-25">
                <!-- /SKILL LOOT ITEM -->
              </div>
              <!-- SKILL LOOT LIST -->
  
              <!-- SKILL LOOT LIST -->
              <div class="skill-loot-list">
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-27.png" alt="item-27">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-28.png" alt="item-28">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-29.png" alt="item-29">
                <!-- /SKILL LOOT ITEM -->
              </div>
              <!-- SKILL LOOT LIST -->
            </div>
            <!-- /TABLE ROW ITEM -->
          </div>
          <!-- /TABLE ROW -->
  
          <!-- TABLE ROW -->
          <div class="table-row big">
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <!-- TEAM INFO WRAP -->
              <div class="team-info-wrap medium">
                <!-- USER AVATAR WRAP -->
                <div class="user-avatar-wrap">
                  <!-- USER AVATAR -->
                  <img class="user-avatar character v2 red" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/10.png" alt="character-10">
                  <!-- /USER AVATAR -->
  
                  <!-- USER AVATAR TEXT -->
                  <p class="user-avatar-text red">13</p>
                  <!-- /USER AVATAR TEXT -->
                </div>
                <!-- /USER AVATAR WRAP -->
  
                <!-- SKILL LOOT LIST -->
                <div class="skill-loot-list vertical">
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/skills/skill-19.png" alt="skill-19">
                  <!-- /SKILL LOOT ITEM -->
  
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/skills/skill-20.png" alt="skill-20">
                  <!-- /SKILL LOOT ITEM -->
                </div>
                <!-- SKILL LOOT LIST -->
  
                <!-- TEAM INFO -->
                <div class="team-info">
                  <p class="team-name">PXSlasher</p>
                  <p class="team-country">Jungle</p>
                </div>
                <!-- /TEAM INFO -->
              </div>
              <!-- /TEAM INFO WRAP -->
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder"><span class="highlight">7</span> / <span class="highlight">7</span> / <span class="highlight">9</span></p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">11189</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">156</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">2 26 7</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <p class="table-text bolder">59</p>
            </div>
            <!-- /TABLE ROW ITEM -->
  
            <!-- TABLE ROW ITEM -->
            <div class="table-row-item">
              <!-- SKILL LOOT LIST -->
              <div class="skill-loot-list">
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-15.png" alt="item-15">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-16.png" alt="item-16">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-17.png" alt="item-17">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-18.png" alt="item-18">
                <!-- /SKILL LOOT ITEM -->
              </div>
              <!-- SKILL LOOT LIST -->
  
              <!-- SKILL LOOT LIST -->
              <div class="skill-loot-list">
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-19.png" alt="item-19">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-20.png" alt="item-20">
                <!-- /SKILL LOOT ITEM -->
  
                <!-- SKILL LOOT ITEM -->
                <img class="skill-loot-item skill-loot-img small" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-21.png" alt="item-21">
                <!-- /SKILL LOOT ITEM -->
              </div>
              <!-- SKILL LOOT LIST -->
            </div>
            <!-- /TABLE ROW ITEM -->
          </div>
          <!-- /TABLE ROW -->
        </div>
        <!-- /TABLE ROWS -->
      </div>
      <!-- /TABLE -->
  
      <!-- WIDGET ROW -->
      <div class="widget-row filled mobile">
        <!-- BAN LIST WRAP -->
        <div class="ban-list-wrap">
          <!-- BAN LIST TITLE -->
          <p class="ban-list-title">Team Bans</p>
          <!-- /BAN LIST TITLE -->
  
          <!-- BAN LIST -->
          <div class="ban-list">
            <!-- BAN LIST ITEM -->
            <img class="ban-list-item user-avatar micro" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/03.png" alt="character-03">
            <!-- /BAN LIST ITEM -->
  
            <!-- BAN LIST ITEM -->
            <img class="ban-list-item user-avatar micro" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/02.png" alt="character-02">
            <!-- /BAN LIST ITEM -->
  
            <!-- BAN LIST ITEM -->
            <img class="ban-list-item user-avatar micro" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/04.png" alt="character-04">
            <!-- /BAN LIST ITEM -->
  
            <!-- BAN LIST ITEM -->
            <img class="ban-list-item user-avatar micro" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/01.png" alt="character-01">
            <!-- /BAN LIST ITEM -->
  
            <!-- BAN LIST ITEM -->
            <img class="ban-list-item user-avatar micro" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/05.png" alt="character-05">
            <!-- /BAN LIST ITEM -->
          </div>
          <!-- /BAN LIST -->
        </div>
        <!-- /BAN LIST WRAP -->
      </div>
      <!-- /WIDGET ROW -->
    </div>
    <!-- /WIDGET ITEM -->
  </div>
  <!-- /LAYOUT CONTENT FULL -->

  <!-- LAYOUT CONTENT 1 -->
  <div class="layout-content-1 layout-item-3-1 grid-limit">
    <!-- LAYOUT BODY -->
    <div class="layout-body layout-item gutter-big">
      <!-- WIDGET ITEM -->
      <div class="widget-item">
        <!-- SECTION TITLE WRAP -->
        <div class="section-title-wrap violet small-space">
          <h2 class="section-title medium">Player Builds</h2>
          <div class="section-title-separator"></div>
        </div>
        <!-- /SECTION TITLE WRAP -->

        <!-- WIDGET MATCH BOX -->
        <div class="widget-match-box">
          <!-- WIDGET TITLE WRAP -->
          <div class="widget-title-wrap">
            <h6 class="widget-title">The Lone Wolves <span class="highlight violet">Builds</span></h6>
            <p class="widget-text bold">Raging Rhinos <span class="highlight violet">Builds</span></p>
          </div>
          <!-- /WIDGET TITLE WRAP -->
    
          <!-- CHARACTER SELECTION LIST -->
          <div class="character-selection-list">
            <!-- CHARACTER LIST -->
            <div class="character-list hoverable">
              <!-- USER AVATAR -->
              <img class="user-avatar character v2 blue active" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/01.png" alt="character-01">
              <!-- /USER AVATAR -->
    
              <!-- USER AVATAR -->
              <img class="user-avatar character v2 blue" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/02.png" alt="character-02">
              <!-- /USER AVATAR -->
    
              <!-- USER AVATAR -->
              <img class="user-avatar character v2 blue" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/03.png" alt="character-03">
              <!-- /USER AVATAR -->
    
              <!-- USER AVATAR -->
              <img class="user-avatar character v2 blue" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/04.png" alt="character-04">
              <!-- /USER AVATAR -->
    
              <!-- USER AVATAR -->
              <img class="user-avatar character v2 blue" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/05.png" alt="character-05">
              <!-- /USER AVATAR -->
            </div>
            <!-- /CHARACTER LIST -->
    
            <!-- CHARACTER SELECTION LIST TEXT -->
            <p class="character-selection-list-text">Select a Character</p>
            <!-- /CHARACTER SELECTION LIST TEXT -->
    
            <!-- CHARACTER LIST -->
            <div class="character-list hoverable">
              <!-- USER AVATAR -->
              <img class="user-avatar character v2 red" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/10.png" alt="character-10">
              <!-- /USER AVATAR -->
    
              <!-- USER AVATAR -->
              <img class="user-avatar character v2 red" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/09.png" alt="character-09">
              <!-- /USER AVATAR -->
    
              <!-- USER AVATAR -->
              <img class="user-avatar character v2 red" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/08.png" alt="character-08">
              <!-- /USER AVATAR -->
    
              <!-- USER AVATAR -->
              <img class="user-avatar character v2 red" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/07.png" alt="character-07">
              <!-- /USER AVATAR -->
    
              <!-- USER AVATAR -->
              <img class="user-avatar character v2 red" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/06.png" alt="character-06">
              <!-- /USER AVATAR -->
            </div>
            <!-- /CHARACTER LIST -->
          </div>
          <!-- /CHARACTER SELECTION LIST -->
        </div>
        <!-- /WIDGET MATCH BOX -->

        <!-- WIDGET DISPLAY -->
        <div class="widget-display multiple-items medium align-left">
          <!-- FEATURED STAT WRAP -->
          <div class="featured-stat-wrap">
            <!-- FEATURED STAT TITLE -->
            <p class="featured-stat-title">2.00</p>
            <!-- /FEATURED STAT TITLE -->

            <!-- FEATURED STAT TEXT -->
            <p class="featured-stat-text">KDA</p>
            <!-- /FEATURED STAT TEXT -->
          </div>
          <!-- /FEATURED STAT WRAP -->

          <!-- FEATURED STAT WRAP -->
          <div class="featured-stat-wrap">
            <!-- FEATURED STAT TITLE -->
            <p class="featured-stat-title">1</p>
            <!-- /FEATURED STAT TITLE -->

            <!-- FEATURED STAT TEXT -->
            <p class="featured-stat-text">Double Kills</p>
            <!-- /FEATURED STAT TEXT -->
          </div>
          <!-- /FEATURED STAT WRAP -->

          <!-- FEATURED STAT WRAP -->
          <div class="featured-stat-wrap">
            <!-- FEATURED STAT TITLE -->
            <p class="featured-stat-title">0</p>
            <!-- /FEATURED STAT TITLE -->

            <!-- FEATURED STAT TEXT -->
            <p class="featured-stat-text">Triple Kills</p>
            <!-- /FEATURED STAT TEXT -->
          </div>
          <!-- /FEATURED STAT WRAP -->

          <!-- FEATURED STAT WRAP -->
          <div class="featured-stat-wrap">
            <!-- FEATURED STAT TITLE -->
            <p class="featured-stat-title">0</p>
            <!-- /FEATURED STAT TITLE -->

            <!-- FEATURED STAT TEXT -->
            <p class="featured-stat-text">Quadra Kills</p>
            <!-- /FEATURED STAT TEXT -->
          </div>
          <!-- /FEATURED STAT WRAP -->

          <!-- FEATURED STAT WRAP -->
          <div class="featured-stat-wrap">
            <!-- FEATURED STAT TITLE -->
            <p class="featured-stat-title">0</p>
            <!-- /FEATURED STAT TITLE -->

            <!-- FEATURED STAT TEXT -->
            <p class="featured-stat-text">Penta Kills</p>
            <!-- /FEATURED STAT TEXT -->
          </div>
          <!-- /FEATURED STAT WRAP -->
        </div>
        <!-- /WIDGET DISPLAY -->

        <!-- WIDGET OVERFLOW WRAP -->
        <div class="widget-overflow-wrap skill-stats">
          <!-- WIDGET MATCH BOX -->
          <div class="widget-match-box skill-stats">
            <!-- WIDGET TITLE WRAP -->
            <div class="widget-title-wrap">
              <!-- WIDGET TITLE ITEM -->
              <div class="widget-title-item">
                <p class="widget-title">Skill Order</p>
              </div>
              <!-- /WIDGET TITLE ITEM -->
    
              <!-- WIDGET TITLE ITEM -->
              <div class="widget-title-item">
                <!-- TEAM SCORE BOXES TITLE WRAP -->
                <div class="team-score-boxes-title-wrap">
                  <!-- TEAM SCORE BOX TITLE -->
                  <p class="team-score-box-title">1</p>
                  <!-- /TEAM SCORE BOX TITLE -->
                  
                  <!-- TEAM SCORE BOX TITLE -->
                  <p class="team-score-box-title">2</p>
                  <!-- /TEAM SCORE BOX TITLE -->
                  
                  <!-- TEAM SCORE BOX TITLE -->
                  <p class="team-score-box-title">3</p>
                  <!-- /TEAM SCORE BOX TITLE -->
                  
                  <!-- TEAM SCORE BOX TITLE -->
                  <p class="team-score-box-title">4</p>
                  <!-- /TEAM SCORE BOX TITLE -->
                  
                  <!-- TEAM SCORE BOX TITLE -->
                  <p class="team-score-box-title">5</p>
                  <!-- /TEAM SCORE BOX TITLE -->
                  
                  <!-- TEAM SCORE BOX TITLE -->
                  <p class="team-score-box-title">6</p>
                  <!-- /TEAM SCORE BOX TITLE -->
                  
                  <!-- TEAM SCORE BOX TITLE -->
                  <p class="team-score-box-title">7</p>
                  <!-- /TEAM SCORE BOX TITLE -->
                  
                  <!-- TEAM SCORE BOX TITLE -->
                  <p class="team-score-box-title">8</p>
                  <!-- /TEAM SCORE BOX TITLE -->
    
                  <!-- TEAM SCORE BOX TITLE -->
                  <p class="team-score-box-title">9</p>
                  <!-- /TEAM SCORE BOX TITLE -->
                  
                  <!-- TEAM SCORE BOX TITLE -->
                  <p class="team-score-box-title">10</p>
                  <!-- /TEAM SCORE BOX TITLE -->
                  
                  <!-- TEAM SCORE BOX TITLE -->
                  <p class="team-score-box-title">11</p>
                  <!-- /TEAM SCORE BOX TITLE -->
                  
                  <!-- TEAM SCORE BOX TITLE -->
                  <p class="team-score-box-title">12</p>
                  <!-- /TEAM SCORE BOX TITLE -->
    
                  <!-- TEAM SCORE BOX TITLE -->
                  <p class="team-score-box-title">13</p>
                  <!-- /TEAM SCORE BOX TITLE -->
                  
                  <!-- TEAM SCORE BOX TITLE -->
                  <p class="team-score-box-title">14</p>
                  <!-- /TEAM SCORE BOX TITLE -->
                  
                  <!-- TEAM SCORE BOX TITLE -->
                  <p class="team-score-box-title">15</p>
                  <!-- /TEAM SCORE BOX TITLE -->
                  
                  <!-- TEAM SCORE BOX TITLE -->
                  <p class="team-score-box-title">16</p>
                  <!-- /TEAM SCORE BOX TITLE -->
    
                  <!-- TEAM SCORE BOX TITLE -->
                  <p class="team-score-box-title">17</p>
                  <!-- /TEAM SCORE BOX TITLE -->
    
                  <!-- TEAM SCORE BOX TITLE -->
                  <p class="team-score-box-title">18</p>
                  <!-- /TEAM SCORE BOX TITLE -->
                </div>
                <!-- /TEAM SCORE BOXES TITLE WRAP -->
              </div>
              <!-- /WIDGET TITLE ITEM -->
            </div>
            <!-- /WIDGET TITLE WRAP -->
    
            <!-- WIDGET TEAM VS -->
            <div class="widget-team-vs v3 tiny">
              <!-- WIDGET TEAM VS ITEM -->
              <div class="widget-team-vs-item">
                <!-- SKILL LOOT LIST -->
                <div class="skill-loot-list">
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img medium" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/skills/skill-b-01.png" alt="skill-b-01">
                  <!-- /SKILL LOOT ITEM -->
                </div>
                <!-- /SKILL LOOT LIST -->
    
                <!-- TEAM SCORE BOXES -->
                <div class="team-score-boxes small fill-end">
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box filled">
                    <!-- TEAM SCORE BOX TEXT -->
                    <p class="team-score-box-text">Q</p>
                    <!-- /TEAM SCORE BOX TEXT -->
                  </div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box"></div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box"></div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box filled">
                    <!-- TEAM SCORE BOX TEXT -->
                    <p class="team-score-box-text">Q</p>
                    <!-- /TEAM SCORE BOX TEXT -->
                  </div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box filled">
                    <!-- TEAM SCORE BOX TEXT -->
                    <p class="team-score-box-text">Q</p>
                    <!-- /TEAM SCORE BOX TEXT -->
                  </div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box"></div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box filled">
                    <!-- TEAM SCORE BOX TEXT -->
                    <p class="team-score-box-text">Q</p>
                    <!-- /TEAM SCORE BOX TEXT -->
                  </div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box"></div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box filled">
                    <!-- TEAM SCORE BOX TEXT -->
                    <p class="team-score-box-text">Q</p>
                    <!-- /TEAM SCORE BOX TEXT -->
                  </div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box"></div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box"></div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box"></div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box"></div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box"></div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box"></div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box filled">
                    <!-- TEAM SCORE BOX TEXT -->
                    <p class="team-score-box-text">Q</p>
                    <!-- /TEAM SCORE BOX TEXT -->
                  </div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box"></div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box"></div>
                  <!-- /TEAM SCORE BOX -->
                </div>
                <!-- /TEAM SCORE BOXES -->
              </div>
              <!-- /WIDGET TEAM VS ITEM -->
    
              <!-- WIDGET TEAM VS ITEM -->
              <div class="widget-team-vs-item">
                <!-- SKILL LOOT LIST -->
                <div class="skill-loot-list">
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img medium" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/skills/skill-b-02.png" alt="skill-b-02">
                  <!-- /SKILL LOOT ITEM -->
                </div>
                <!-- /SKILL LOOT LIST -->
    
                <!-- TEAM SCORE BOXES -->
                <div class="team-score-boxes small fill-end">
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box"></div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box"></div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box filled">
                    <!-- TEAM SCORE BOX TEXT -->
                    <p class="team-score-box-text">W</p>
                    <!-- /TEAM SCORE BOX TEXT -->
                  </div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box"></div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box"></div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box"></div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box"></div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box"></div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box"></div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box"></div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box"></div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box"></div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box"></div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box filled">
                    <!-- TEAM SCORE BOX TEXT -->
                    <p class="team-score-box-text">W</p>
                    <!-- /TEAM SCORE BOX TEXT -->
                  </div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box filled">
                    <!-- TEAM SCORE BOX TEXT -->
                    <p class="team-score-box-text">W</p>
                    <!-- /TEAM SCORE BOX TEXT -->
                  </div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box"></div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box"></div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box"></div>
                  <!-- /TEAM SCORE BOX -->
                </div>
                <!-- /TEAM SCORE BOXES -->
              </div>
              <!-- /WIDGET TEAM VS ITEM -->
    
              <!-- WIDGET TEAM VS ITEM -->
              <div class="widget-team-vs-item">
                <!-- SKILL LOOT LIST -->
                <div class="skill-loot-list">
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img medium" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/skills/skill-b-03.png" alt="skill-b-03">
                  <!-- /SKILL LOOT ITEM -->
                </div>
                <!-- /SKILL LOOT LIST -->
    
                <!-- TEAM SCORE BOXES -->
                <div class="team-score-boxes small fill-end">
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box"></div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box filled">
                    <!-- TEAM SCORE BOX TEXT -->
                    <p class="team-score-box-text">E</p>
                    <!-- /TEAM SCORE BOX TEXT -->
                  </div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box"></div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box"></div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box"></div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box"></div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box"></div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box filled">
                    <!-- TEAM SCORE BOX TEXT -->
                    <p class="team-score-box-text">E</p>
                    <!-- /TEAM SCORE BOX TEXT -->
                  </div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box"></div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box filled">
                    <!-- TEAM SCORE BOX TEXT -->
                    <p class="team-score-box-text">E</p>
                    <!-- /TEAM SCORE BOX TEXT -->
                  </div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box"></div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box filled">
                    <!-- TEAM SCORE BOX TEXT -->
                    <p class="team-score-box-text">E</p>
                    <!-- /TEAM SCORE BOX TEXT -->
                  </div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box filled">
                    <!-- TEAM SCORE BOX TEXT -->
                    <p class="team-score-box-text">E</p>
                    <!-- /TEAM SCORE BOX TEXT -->
                  </div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box"></div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box"></div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box"></div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box"></div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box"></div>
                  <!-- /TEAM SCORE BOX -->
                </div>
                <!-- /TEAM SCORE BOXES -->
              </div>
              <!-- /WIDGET TEAM VS ITEM -->
    
              <!-- WIDGET TEAM VS ITEM -->
              <div class="widget-team-vs-item">
                <!-- SKILL LOOT LIST -->
                <div class="skill-loot-list">
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img medium" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/skills/skill-b-04.png" alt="skill-b-04">
                  <!-- /SKILL LOOT ITEM -->
                </div>
                <!-- /SKILL LOOT LIST -->
    
                <!-- TEAM SCORE BOXES -->
                <div class="team-score-boxes small fill-end">
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box"></div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box"></div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box"></div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box"></div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box"></div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box"></div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box filled">
                    <!-- TEAM SCORE BOX TEXT -->
                    <p class="team-score-box-text">R</p>
                    <!-- /TEAM SCORE BOX TEXT -->
                  </div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box"></div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box"></div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box"></div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box filled">
                    <!-- TEAM SCORE BOX TEXT -->
                    <p class="team-score-box-text">R</p>
                    <!-- /TEAM SCORE BOX TEXT -->
                  </div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box"></div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box"></div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box"></div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box"></div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box"></div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box"></div>
                  <!-- /TEAM SCORE BOX -->
    
                  <!-- TEAM SCORE BOX -->
                  <div class="team-score-box filled">
                    <!-- TEAM SCORE BOX TEXT -->
                    <p class="team-score-box-text">R</p>
                    <!-- /TEAM SCORE BOX TEXT -->
                  </div>
                  <!-- /TEAM SCORE BOX -->
                </div>
                <!-- /TEAM SCORE BOXES -->
              </div>
              <!-- /WIDGET TEAM VS ITEM -->
            </div>
            <!-- /WIDGET TEAM VS -->
          </div>
          <!-- /WIDGET MATCH BOX -->
        </div>
        <!-- WIDGET OVERFLOW WRAP -->

        <!-- WIDGET MATCH BOX -->
        <div class="widget-match-box">
          <!-- WIDGET TITLE WRAP -->
          <div class="widget-title-wrap">
            <!-- WIDGET TITLE ITEM -->
            <div class="widget-title-item">
              <!-- WIDGET TITLE -->
              <p class="widget-title">Items</p>
              <!-- /WIDGET TITLE -->
            </div>
            <!-- /WIDGET TITLE ITEM -->
          </div>
          <!-- /WIDGET TITLE WRAP -->
    
          <!-- WIDGET OVERFLOW WRAP -->
          <div class="widget-overflow-wrap item-stats">
            <!-- WIDGET OVERFLOW LIST WRAP -->
            <div class="widget-overflow-list-wrap">
              <!-- WIDGET OVERFLOW LIST -->
              <div class="widget-overflow-list">
                <!-- WIDGET OVERFLOW LIST TEXT -->
                <p class="widget-overflow-list-text">0m</p>
                <!-- /WIDGET OVERFLOW LIST TEXT -->
    
                <!-- SKILL LOOT LIST -->
                <div class="skill-loot-list medium">
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img medium" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-b-01.png" alt="item-b-01">
                  <!-- /SKILL LOOT ITEM -->
    
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img medium" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-b-02.png" alt="item-b-02">
                  <!-- /SKILL LOOT ITEM -->
    
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img medium" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-b-02.png" alt="item-b-02">
                  <!-- /SKILL LOOT ITEM -->
    
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img medium" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-b-02.png" alt="item-b-02">
                  <!-- /SKILL LOOT ITEM -->
    
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img medium" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-b-03.png" alt="item-b-03">
                  <!-- /SKILL LOOT ITEM -->
    
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img medium" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-b-04.png" alt="item-b-04">
                  <!-- /SKILL LOOT ITEM -->
                </div>
                <!-- SKILL LOOT LIST -->
    
                <!-- WIDGET OVERFLOW LIST TEXT -->
                <p class="widget-overflow-list-text">6m</p>
                <!-- /WIDGET OVERFLOW LIST TEXT -->
    
                <!-- SKILL LOOT LIST -->
                <div class="skill-loot-list medium">
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img medium" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-b-05.png" alt="item-b-05">
                  <!-- /SKILL LOOT ITEM -->
    
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img medium" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-b-06.png" alt="item-b-06">
                  <!-- /SKILL LOOT ITEM -->
    
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img medium" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-b-03.png" alt="item-b-03">
                  <!-- /SKILL LOOT ITEM -->
    
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img medium" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-b-07.png" alt="item-b-07">
                  <!-- /SKILL LOOT ITEM -->
                </div>
                <!-- SKILL LOOT LIST -->
    
                <!-- WIDGET OVERFLOW LIST TEXT -->
                <p class="widget-overflow-list-text">15m</p>
                <!-- /WIDGET OVERFLOW LIST TEXT -->
    
                <!-- SKILL LOOT LIST -->
                <div class="skill-loot-list medium">
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img medium" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-b-08.png" alt="item-b-08">
                  <!-- /SKILL LOOT ITEM -->
                </div>
                <!-- SKILL LOOT LIST -->
    
                <!-- WIDGET OVERFLOW LIST TEXT -->
                <p class="widget-overflow-list-text">22m</p>
                <!-- /WIDGET OVERFLOW LIST TEXT -->
    
                <!-- SKILL LOOT LIST -->
                <div class="skill-loot-list medium">
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img medium" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-b-09.png" alt="item-b-09">
                  <!-- /SKILL LOOT ITEM -->
    
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img medium" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-b-10.png" alt="item-b-10">
                  <!-- /SKILL LOOT ITEM -->
    
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img medium" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-b-11.png" alt="item-b-11">
                  <!-- /SKILL LOOT ITEM -->
                </div>
                <!-- SKILL LOOT LIST -->
    
                <!-- WIDGET OVERFLOW LIST TEXT -->
                <p class="widget-overflow-list-text">27m</p>
                <!-- /WIDGET OVERFLOW LIST TEXT -->
    
                <!-- SKILL LOOT LIST -->
                <div class="skill-loot-list medium">
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img medium" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-b-02.png" alt="item-b-02">
                  <!-- /SKILL LOOT ITEM -->
    
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img medium" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-b-12.png" alt="item-b-12">
                  <!-- /SKILL LOOT ITEM -->
    
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img medium" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-b-13.png" alt="item-b-13">
                  <!-- /SKILL LOOT ITEM -->
                </div>
                <!-- SKILL LOOT LIST -->
    
                <!-- WIDGET OVERFLOW LIST TEXT -->
                <p class="widget-overflow-list-text">33m</p>
                <!-- /WIDGET OVERFLOW LIST TEXT -->
    
                <!-- SKILL LOOT LIST -->
                <div class="skill-loot-list medium">
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img medium" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-b-01.png" alt="item-b-01">
                  <!-- /SKILL LOOT ITEM -->
    
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img medium" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-b-10.png" alt="item-b-10">
                  <!-- /SKILL LOOT ITEM -->
    
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img medium" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-b-10.png" alt="item-b-10">
                  <!-- /SKILL LOOT ITEM -->
    
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img medium" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-b-06.png" alt="item-b-06">
                  <!-- /SKILL LOOT ITEM -->
    
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img medium" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-b-12.png" alt="item-b-12">
                  <!-- /SKILL LOOT ITEM -->
    
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img medium" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/loot/item-b-05.png" alt="item-b-05">
                  <!-- /SKILL LOOT ITEM -->
                </div>
                <!-- SKILL LOOT LIST -->
              </div>
              <!-- /WIDGET OVERFLOW LIST -->
            </div>
            <!-- /WIDGET OVERFLOW LIST WRAP -->
          </div>
          <!-- /WIDGET OVERFLOW WRAP -->
        </div>
        <!-- /WIDGET MATCH BOX -->

        <!-- WIDGET MATCH BOX -->
        <div class="widget-match-box">
          <!-- WIDGET TITLE WRAP -->
          <div class="widget-title-wrap">
            <!-- WIDGET TITLE ITEM -->
            <div class="widget-title-item">
              <!-- WIDGET TITLE -->
              <p class="widget-title">Runes</p>
              <!-- /WIDGET TITLE -->
            </div>
            <!-- /WIDGET TITLE ITEM -->
          </div>
          <!-- /WIDGET TITLE WRAP -->
    
          <!-- WIDGET OVERFLOW WRAP -->
          <div class="widget-overflow-wrap rune-stats">
            <!-- WIDGET OVERFLOW LIST WRAP -->
            <div class="widget-overflow-list-wrap">
              <!-- WIDGET OVERFLOW LIST -->
              <div class="widget-overflow-list">
                <!-- SKILL LOOT LIST -->
                <div class="skill-loot-list medium">
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img medium" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/runes/runes-b-01.png" alt="rune-b-01">
                  <!-- /SKILL LOOT ITEM -->
    
                  <!-- SKILL LOOT ITEM INFO -->
                  <div class="skill-loot-item-info">
                    <!-- SKILL LOOT ITEM TITLE -->
                    <p class="skill-loot-item-title">Escalation</p>
                    <!-- /SKILL LOOT ITEM TITLE -->
    
                    <!-- SKILL LOOT ITEM TEXT -->
                    <p class="skill-loot-item-text">Bursts damage and tager access</p>
                    <!-- /SKILL LOOT ITEM TEXT -->
                  </div>
                  <!-- /SKILL LOOT ITEM INFO -->
                </div>
                <!-- SKILL LOOT LIST -->
    
                <!-- SKILL LOOT LIST -->
                <div class="skill-loot-list medium">
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img medium" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/runes/runes-b-02.png" alt="rune-b-02">
                  <!-- /SKILL LOOT ITEM -->
    
                  <!-- SKILL LOOT ITEM INFO -->
                  <div class="skill-loot-item-info">
                    <!-- SKILL LOOT ITEM TITLE -->
                    <p class="skill-loot-item-title">Bullseye</p>
                    <!-- /SKILL LOOT ITEM TITLE -->
    
                    <!-- SKILL LOOT ITEM TEXT -->
                    <p class="skill-loot-item-text">Improved attacks and sustained damage</p>
                    <!-- /SKILL LOOT ITEM TEXT -->
                  </div>
                  <!-- /SKILL LOOT ITEM INFO -->
                </div>
                <!-- SKILL LOOT LIST -->
    
                <!-- SKILL LOOT LIST -->
                <div class="skill-loot-list medium">
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img medium" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/runes/runes-b-03.png" alt="rune-b-03">
                  <!-- /SKILL LOOT ITEM -->
    
                  <!-- SKILL LOOT ITEM INFO -->
                  <div class="skill-loot-item-info">
                    <!-- SKILL LOOT ITEM TITLE -->
                    <p class="skill-loot-item-title">Electrify</p>
                    <!-- /SKILL LOOT ITEM TITLE -->
    
                    <!-- SKILL LOOT ITEM TEXT -->
                    <p class="skill-loot-item-text">Total: 2140</p>
                    <!-- /SKILL LOOT ITEM TEXT -->
                  </div>
                  <!-- /SKILL LOOT ITEM INFO -->
                </div>
                <!-- SKILL LOOT LIST -->
    
                <!-- SKILL LOOT LIST -->
                <div class="skill-loot-list medium">
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img medium" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/runes/runes-b-04.png" alt="rune-b-04">
                  <!-- /SKILL LOOT ITEM -->
    
                  <!-- SKILL LOOT ITEM INFO -->
                  <div class="skill-loot-item-info">
                    <!-- SKILL LOOT ITEM TITLE -->
                    <p class="skill-loot-item-title">Mysticist Hunter</p>
                    <!-- /SKILL LOOT ITEM TITLE -->
    
                    <!-- SKILL LOOT ITEM TEXT -->
                    <p class="skill-loot-item-text">Total: 13</p>
                    <!-- /SKILL LOOT ITEM TEXT -->
                  </div>
                  <!-- /SKILL LOOT ITEM INFO -->
                </div>
                <!-- SKILL LOOT LIST -->
    
                <!-- SKILL LOOT LIST -->
                <div class="skill-loot-list medium">
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img medium" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/runes/runes-b-05.png" alt="rune-b-05">
                  <!-- /SKILL LOOT ITEM -->
    
                  <!-- SKILL LOOT ITEM INFO -->
                  <div class="skill-loot-item-info">
                    <!-- SKILL LOOT ITEM TITLE -->
                    <p class="skill-loot-item-title">Sudden Explotion</p>
                    <!-- /SKILL LOOT ITEM TITLE -->
    
                    <!-- SKILL LOOT ITEM TEXT -->
                    <p class="skill-loot-item-text">Total: 1017</p>
                    <!-- /SKILL LOOT ITEM TEXT -->
                  </div>
                  <!-- /SKILL LOOT ITEM INFO -->
                </div>
                <!-- SKILL LOOT LIST -->
    
                <!-- SKILL LOOT LIST -->
                <div class="skill-loot-list medium">
                  <!-- SKILL LOOT ITEM -->
                  <img class="skill-loot-item skill-loot-img medium" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/runes/runes-b-06.png" alt="rune-b-06">
                  <!-- /SKILL LOOT ITEM -->
    
                  <!-- SKILL LOOT ITEM INFO -->
                  <div class="skill-loot-item-info">
                    <!-- SKILL LOOT ITEM TITLE -->
                    <p class="skill-loot-item-title">Last Shot</p>
                    <!-- /SKILL LOOT ITEM TITLE -->
    
                    <!-- SKILL LOOT ITEM TEXT -->
                    <p class="skill-loot-item-text">Total: 560</p>
                    <!-- /SKILL LOOT ITEM TEXT -->
                  </div>
                  <!-- /SKILL LOOT ITEM INFO -->
                </div>
                <!-- SKILL LOOT LIST -->
              </div>
              <!-- /WIDGET OVERFLOW LIST -->
            </div>
            <!-- /WIDGET OVERFLOW LIST WRAP -->
          </div>
          <!-- /WIDGET OVERFLOW WRAP -->
        </div>
        <!-- /WIDGET MATCH BOX -->
      </div>
      <!-- /WIDGET ITEM -->
    </div>
    <!-- /LAYOUT BODY -->

    <!-- LAYOUT SIDEBAR -->
    <div class="layout-sidebar layout-item gutter-medium">
      <!-- WIDGET SIDEBAR -->
      <div class="widget-sidebar">
        <!-- SECTION TITLE WRAP -->
        <div class="section-title-wrap violet small-space">
          <h2 class="section-title medium">Total Damage</h2>
          <div class="section-title-separator"></div>
        </div>
        <!-- /SECTION TITLE WRAP -->

        <!-- TABLE -->
        <div class="table champion-rates">
          <!-- TABLE ROW HEADER -->
          <div class="table-row-header">
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item left">
              <p class="table-row-header-title">Player/Role</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
    
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item">
              <p class="table-row-header-title">Damage</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
          </div>
          <!-- /TABLE ROW HEADER -->
    
          <!-- TABLE ROWS -->
          <div class="table-rows no-color">
            <!-- TABLE ROW -->
            <div class="table-row">
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <!-- TEAM INFO WRAP -->
                <div class="team-info-wrap">
                  <!-- USER AVATAR -->
                  <img class="user-avatar character v2 small blue" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/01.png" alt="character-01">
                  <!-- /USER AVATAR -->
                  
                  <!-- TEAM INFO -->
                  <div class="team-info">
                    <p class="team-name">Joystickz-70</p>
                    <p class="team-country">MID | SOLO</p>
                  </div>
                  <!-- /TEAM INFO -->
                </div>
                <!-- /TEAM INFO WRAP -->
              </div>
              <!-- /TABLE ROW ITEM -->
    
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <!-- PROGRESS BAR -->
                <div id="ew3-pgb-crd-01" class="progress-bar link-left"></div>
                <!-- /PROGRESS BAR -->
              </div>
              <!-- /TABLE ROW ITEM -->
            </div>
            <!-- /TABLE ROW -->
    
            <!-- TABLE ROW -->
            <div class="table-row">
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <!-- TEAM INFO WRAP -->
                <div class="team-info-wrap">
                  <!-- USER AVATAR -->
                  <img class="user-avatar character v2 small blue" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/04.png" alt="character-04">
                  <!-- /USER AVATAR -->
                  
                  <!-- TEAM INFO -->
                  <div class="team-info">
                    <p class="team-name">DABLADE_NT</p>
                    <p class="team-country">TOP | SOLO</p>
                  </div>
                  <!-- /TEAM INFO -->
                </div>
                <!-- /TEAM INFO WRAP -->
              </div>
              <!-- /TABLE ROW ITEM -->
    
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <!-- PROGRESS BAR -->
                <div id="ew3-pgb-crd-02" class="progress-bar link-left"></div>
                <!-- /PROGRESS BAR -->
              </div>
              <!-- /TABLE ROW ITEM -->
            </div>
            <!-- /TABLE ROW -->
    
            <!-- TABLE ROW -->
            <div class="table-row">
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <!-- TEAM INFO WRAP -->
                <div class="team-info-wrap">
                  <!-- USER AVATAR -->
                  <img class="user-avatar character v2 small red" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/10.png" alt="character-10">
                  <!-- /USER AVATAR -->
                  
                  <!-- TEAM INFO -->
                  <div class="team-info">
                    <p class="team-name">PXSlasher</p>
                    <p class="team-country">JUNGLE</p>
                  </div>
                  <!-- /TEAM INFO -->
                </div>
                <!-- /TEAM INFO WRAP -->
              </div>
              <!-- /TABLE ROW ITEM -->
    
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <!-- PROGRESS BAR -->
                <div id="ew3-pgb-crd-03" class="progress-bar link-left"></div>
                <!-- /PROGRESS BAR -->
              </div>
              <!-- /TABLE ROW ITEM -->
            </div>
            <!-- /TABLE ROW -->
    
            <!-- TABLE ROW -->
            <div class="table-row">
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <!-- TEAM INFO WRAP -->
                <div class="team-info-wrap">
                  <!-- USER AVATAR -->
                  <img class="user-avatar character v2 small red" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/08.png" alt="character-08">
                  <!-- /USER AVATAR -->
                  
                  <!-- TEAM INFO -->
                  <div class="team-info">
                    <p class="team-name">Arrowhead</p>
                    <p class="team-country">TOP | SOLO</p>
                  </div>
                  <!-- /TEAM INFO -->
                </div>
                <!-- /TEAM INFO WRAP -->
              </div>
              <!-- /TABLE ROW ITEM -->
    
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <!-- PROGRESS BAR -->
                <div id="ew3-pgb-crd-04" class="progress-bar link-left"></div>
                <!-- /PROGRESS BAR -->
              </div>
              <!-- /TABLE ROW ITEM -->
            </div>
            <!-- /TABLE ROW -->
    
            <!-- TABLE ROW -->
            <div class="table-row">
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <!-- TEAM INFO WRAP -->
                <div class="team-info-wrap">
                  <!-- USER AVATAR -->
                  <img class="user-avatar character v2 small blue" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/03.png" alt="character-03">
                  <!-- /USER AVATAR -->
                  
                  <!-- TEAM INFO -->
                  <div class="team-info">
                    <p class="team-name">Firestorm</p>
                    <p class="team-country">BOT | CARRY</p>
                  </div>
                  <!-- /TEAM INFO -->
                </div>
                <!-- /TEAM INFO WRAP -->
              </div>
              <!-- /TABLE ROW ITEM -->
    
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <!-- PROGRESS BAR -->
                <div id="ew3-pgb-crd-05" class="progress-bar link-left"></div>
                <!-- /PROGRESS BAR -->
              </div>
              <!-- /TABLE ROW ITEM -->
            </div>
            <!-- /TABLE ROW -->

            <!-- TABLE ROW -->
            <div class="table-row">
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <!-- TEAM INFO WRAP -->
                <div class="team-info-wrap">
                  <!-- USER AVATAR -->
                  <img class="user-avatar character v2 small blue" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/05.png" alt="character-05">
                  <!-- /USER AVATAR -->
                  
                  <!-- TEAM INFO -->
                  <div class="team-info">
                    <p class="team-name">Keymaster</p>
                    <p class="team-country">JUNGLE</p>
                  </div>
                  <!-- /TEAM INFO -->
                </div>
                <!-- /TEAM INFO WRAP -->
              </div>
              <!-- /TABLE ROW ITEM -->
    
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <!-- PROGRESS BAR -->
                <div id="ew3-pgb-crd-06" class="progress-bar link-left"></div>
                <!-- /PROGRESS BAR -->
              </div>
              <!-- /TABLE ROW ITEM -->
            </div>
            <!-- /TABLE ROW -->

            <!-- TABLE ROW -->
            <div class="table-row">
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <!-- TEAM INFO WRAP -->
                <div class="team-info-wrap">
                  <!-- USER AVATAR -->
                  <img class="user-avatar character v2 small red" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/09.png" alt="character-09">
                  <!-- /USER AVATAR -->
                  
                  <!-- TEAM INFO -->
                  <div class="team-info">
                    <p class="team-name">TheLightning</p>
                    <p class="team-country">MID | SOLO</p>
                  </div>
                  <!-- /TEAM INFO -->
                </div>
                <!-- /TEAM INFO WRAP -->
              </div>
              <!-- /TABLE ROW ITEM -->
    
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <!-- PROGRESS BAR -->
                <div id="ew3-pgb-crd-07" class="progress-bar link-left"></div>
                <!-- /PROGRESS BAR -->
              </div>
              <!-- /TABLE ROW ITEM -->
            </div>
            <!-- /TABLE ROW -->

            <!-- TABLE ROW -->
            <div class="table-row">
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <!-- TEAM INFO WRAP -->
                <div class="team-info-wrap">
                  <!-- USER AVATAR -->
                  <img class="user-avatar character v2 small blue" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/02.png" alt="character-02">
                  <!-- /USER AVATAR -->
                  
                  <!-- TEAM INFO -->
                  <div class="team-info">
                    <p class="team-name">Dr.Chaos</p>
                    <p class="team-country">BOT | SUPPORT</p>
                  </div>
                  <!-- /TEAM INFO -->
                </div>
                <!-- /TEAM INFO WRAP -->
              </div>
              <!-- /TABLE ROW ITEM -->
    
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <!-- PROGRESS BAR -->
                <div id="ew3-pgb-crd-08" class="progress-bar link-left"></div>
                <!-- /PROGRESS BAR -->
              </div>
              <!-- /TABLE ROW ITEM -->
            </div>
            <!-- /TABLE ROW -->

            <!-- TABLE ROW -->
            <div class="table-row">
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <!-- TEAM INFO WRAP -->
                <div class="team-info-wrap">
                  <!-- USER AVATAR -->
                  <img class="user-avatar character v2 small red" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/06.png" alt="character-06">
                  <!-- /USER AVATAR -->
                  
                  <!-- TEAM INFO -->
                  <div class="team-info">
                    <p class="team-name">Pixelus.GD</p>
                    <p class="team-country">BOT | CARRY</p>
                  </div>
                  <!-- /TEAM INFO -->
                </div>
                <!-- /TEAM INFO WRAP -->
              </div>
              <!-- /TABLE ROW ITEM -->
    
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <!-- PROGRESS BAR -->
                <div id="ew3-pgb-crd-09" class="progress-bar link-left"></div>
                <!-- /PROGRESS BAR -->
              </div>
              <!-- /TABLE ROW ITEM -->
            </div>
            <!-- /TABLE ROW -->

            <!-- TABLE ROW -->
            <div class="table-row">
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <!-- TEAM INFO WRAP -->
                <div class="team-info-wrap">
                  <!-- USER AVATAR -->
                  <img class="user-avatar character v2 small red" src="<?php echo get_stylesheet_directory_uri()?>/img/characters/07.png" alt="character-07">
                  <!-- /USER AVATAR -->
                  
                  <!-- TEAM INFO -->
                  <div class="team-info">
                    <p class="team-name">Striker15</p>
                    <p class="team-country">BOT | SOLO</p>
                  </div>
                  <!-- /TEAM INFO -->
                </div>
                <!-- /TEAM INFO WRAP -->
              </div>
              <!-- /TABLE ROW ITEM -->
    
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <!-- PROGRESS BAR -->
                <div id="ew3-pgb-crd-10" class="progress-bar link-left"></div>
                <!-- /PROGRESS BAR -->
              </div>
              <!-- /TABLE ROW ITEM -->
            </div>
            <!-- /TABLE ROW -->
          </div>
          <!-- /TABLE ROWS -->
        </div>
        <!-- /TABLE -->
      </div>
      <!-- /WIDGET SIDEBAR -->
    </div>
    <!-- /LAYOUT SIDEBAR -->
  </div>
  <!-- LAYOUT CONTENT 1 -->


<!-- app bundle -->
<script src="app.bundle.min.js"></script>
<?php get_footer(); ?>