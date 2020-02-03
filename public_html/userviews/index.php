<?php require_once __DIR__ . '/../../config.php'; ?>
<?php $currentApp = 'userviews'; ?>
<!DOCTYPE html>
<html>
  <head>
    <?php include '../_head.php'; ?>
    <title><?php echo $I18N->msg( 'userviews-title' ); ?></title>
  </head>
  <body class="clearfix <?php echo $rtl; ?> <?php echo $currentApp; ?>">
    <?php include '../_header.php'; ?>
    <main class="col-lg-8 col-lg-offset-2">
      <!-- Site notice -->
      <div class="text-center site-notice-wrapper">
        <div class="site-notice">
          <?php include "../_browser_check.php"; ?>
        </div>
      </div>
      <form id="pv_form">
        <div class="row aqs-row options">
          <!-- Date range selector -->
          <div class="col-lg-3 col-sm-4">
            <label for="range_input">
              <?php echo $I18N->msg( 'dates' ); ?>
            </label>
            <input class="form-control date-range-selector" id="range_input">
          </div>
          <!-- Project selector -->
          <div class="col-lg-3 col-sm-3">
            <label for="project_input">
              <?php echo $I18N->msg( 'project' ); ?>
            </label>
            <input class="form-control" id="project_input" placeholder="en.wikipedia.org" required="required" spellcheck="false">
          </div>
          <!-- Advanced options -->
          <div class="col-lg-3 col-sm-3">
            <label for="platform_select">
              <?php echo $I18N->msg( 'platform' ); ?>
            </label>
            <select class="form-control">
              <option value="all-access">
                <?php echo $I18N->msg( 'all' ); ?>
              </option>
              <option value="desktop">
                <?php echo $I18N->msg( 'desktop' ); ?>
              </option>
              <option value="mobile-app">
                <?php echo $I18N->msg( 'mobile-app' ); ?>
              </option>
              <option value="mobile-web">
                <?php echo $I18N->msg( 'mobile-web' ); ?>
              </option>
            </select>
          </div>
          <div class="col-lg-3 col-sm-2">
            <label for="agent_select">
              <?php echo $I18N->msg( 'agent' ); ?>
              <a class="help-link" href="/langviews/faq#agents">
                <span class="glyphicon glyphicon-question-sign"></span>
              </a>
            </label>
            <select class="form-control" id="agent_select">
              <option value="all-agents">
                <?php echo $I18N->msg( 'all' ); ?>
              </option>
              <option selected="selected" value="user">
                <?php echo $I18N->msg( 'user' ); ?>
              </option>
              <option value="spider">
                <?php echo $I18N->msg( 'spider' ); ?>
              </option>
            </select>
          </div>
        </div>
        <div class="row aqs-row">
          <div class="col-lg-3">
            <label for="namespace_input">
              <?php echo $I18N->msg( 'namespace' ); ?>
            </label>
            <select class="form-control clearfix" id="namespace_input"></select>
          </div>
          <div class="col-lg-3">
            <label for="namespace_input">
              <?php echo $I18N->msg( 'redirects' ); ?>
            </label>
            <select class="form-control clearfix" id="redirects_select">
              <option value="0">
                <?php echo $I18N->msg( 'exclude-redirects' ); ?>
              </option>
              <option value="1">
                <?php echo $I18N->msg( 'only-redirects' ); ?>
              </option>
              <option value="2">
                <?php echo $I18N->msg( 'redirects-and-non-redirects' ); ?>
              </option>
            </select>
          </div>
          <div class="col-lg-6">
            <label for="source_input">
              <?php echo $I18N->msg( 'user' ); ?>
            </label>
            <div class="input-group">
              <input class="form-control input-control" id="source_input" placeholder="Jimbo Wales" required="required" autocomplete="off">
              <span class="input-group-btn">
                <button class="btn btn-primary btn-submit pull-right">
                  <?php echo $I18N->msg( 'submit' ); ?>
                </button>
              </span>
            </div>
          </div>
        </div>
        <?php
          $columns = array(
            'title' => 'page-title',
            'datestamp' => 'date-created',
            'size' => 'current-size',
            'views' => 'pageviews'
          );
        ?>
      </form>
      <?php include '../_output.php'; ?>
    </main>
    <?php include '../_footer.php'; ?>
    <?php include '../_modals.php'; ?>
  </body>
</html>
