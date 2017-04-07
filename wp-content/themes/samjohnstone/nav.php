<div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium">
  <button class="menu-icon" type="button" data-toggle="example-menu"></button>
  <div class="title-bar-title">Sam Johnstone</div>
</div>

<div class="top-bar" id="example-menu">
  <div class="top-bar-right">
    <ul class="dropdown menu" data-dropdown-menu>
      <li><a href="<?php echo get_permalink( '2' ); ?>" id="work"><?php echo get_the_title( '2' ); ?></a></li>
      <li><a href="<?php echo get_permalink( '4' ); ?>" id="about"><?php echo get_the_title( '4' ); ?></a></li>
      <li><a href="<?php echo get_permalink( '6' ); ?>" id="journal"><?php echo get_the_title( '6' ); ?></a></li>
      <li><a href="http://shop.samjohnstone.co" id="store">Store</a></li>
    </ul>
  </div>
  <div class="top-bar-left">
    <ul class="menu">
      <li class="hide-for-small-only"><a href="<?php echo get_permalink( '2' ); ?>">Sam Johnstone</a></li>
    </ul>
  </div>
</div>