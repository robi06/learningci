<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="brand" href="#">Project name</a>
      <div class="nav-collapse collapse">
        <ul class="nav">
          <li class="active"><a href="#">Home</a></li>
          <li><?php echo anchor('rolepermission/role/view_roles', 'View Roles'); ?></li>
          <li><a href="#contact">Contact</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li class="nav-header">Nav header</li>
              <li><a href="#">Separated link</a></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
        </ul>
        <?php if ($this->session->userdata('auth') == 1): ?>
        <ul class="nav pull-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $this->session->userdata('displayname'); ?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><?php echo anchor('user/logout', 'Logout'); ?></li>
            </ul>
          </li>
        </ul>
        <?php endif; ?>
        <?php if ($this->session->userdata('auth') != 1): ?>
          <?php $this->load->helper('form'); echo form_open('user/do_login', 'class="navbar-form pull-right"'); ?>
            <input class="span2" type="text" placeholder="Email" name="email">
            <input class="span2" type="password" placeholder="Password" name="password">
            <button type="submit" class="btn">Sign in</button>
          <?php echo form_close(); ?>
        <?php endif; ?>
      </div><!--/.nav-collapse -->
    </div>
  </div>
</div>