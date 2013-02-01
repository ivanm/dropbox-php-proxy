<html>
  <head>
  </head>
  <body>
    <h1> Welcome to the Dropbox PHP Server</h1>
    <?php if (is_writable(getcwd())): ?>
    <p> You need to register an app at Dropbox. It's very easy, just enter <a href="https://www.dropbox.com/developers/apps" target="_blank">here</a> and click on 'Create an app'. Choose Core Api. You can select either 'App folder' to share a unique folder of your Dropbox Account or Full Dropbox to access all the files. Copy the App key and App secret and paste them here, we we'll need that to create an Access Token. You'll only need to do this once.</p>
    <form method="POST">
      <div>
        <label>App key</label>
        <input name="app_key"></input>
      </div>
      <div>
        <label>App secret</label>
        <input name="app_secret"></input>
      </div>
      <div>
        <label>Access type</label>
        <select name="root">
          <option value='sandbox'>App folder</option>
          <option value='dropbox'>Full Dropbox</option>
        </select>
      </div>
      <div>
        <input type="submit" name="submit"></input>
      </div>
    </form>
    <?php else:?>
      <p> You need to make this directory writable (<?php echo(getcwd())?>) or provide a valid config.php file</p>
    <?php endif ?>
  <body>
</html>
