<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Marionette Contact Manager</title>
    <link href="./assets/css/bootstrap.css" rel="stylesheet">
    <link href="./assets/css/application.css" rel="stylesheet">
    <link href="./assets/css/jquery-ui-1.10.3.custom.css" rel="stylesheet">
  </head>

  <body>
      
      <div class="heythere"></div>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <span class="brand">Contact manager</span>
        </div>
      </div>
    </div>

    <div id="main-region" class="container">
      <p>Here is static content in the web page. You'll notice that it gets replaced by our app as soon as we start it.</p>
    </div>
      
      <div id="dialog-region"></div>
      
    <script type="text/template" id="contact-list">
      <thead>
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </script>

    <script type="text/template" id="contact-list-item">
      <td><%= firstName %></td>
      <td><%= lastName %></td>
      <td>
        <a href="#contacts/<%= id %>" class="btn btn-small js-show">
          <i class="icon-eye-open"></i>
          Show
        </a>
        <a href="#contacts/<%= id %>/edit" class="btn btn-small js-edit">
          <i class="icon-pencil"></i>
          Edit
        </a>
        <button class="btn btn-small js-delete">
          <i class="icon-remove"></i>
          Delete
        </button>
      </td>
    </script>
    
    <script type="text/template" id="empty-contact-view">
        <p>The contact list is empty.</p>
    </script>

    <script type="text/template" id="missing-contact-view">
      <div class="alert alert-error">This contact doesn't exist !</div>
    </script>

    <script type="text/template" id="contact-view">
      <h1><%= firstName %> <%= lastName %></h1>
      <a href="#contacts/<%= id %>/edit" class="btn btn-small js-edit">
        <i class="icon-pencil"></i>
        Edit this contact
      </a>
      <p><strong>Phone number:</strong> <%= phoneNumber %></p>
    </script>

    <script type="text/template" id="loading-view">
      <h1><%= title %></h1>
      <p><%= message %></p>
      <div id="spinner"></div>
    </script>

    <script type="text/template" id="contact-form">
      <form>
        <div class="control-group">
          <label for="contact-firstName" class="control-label">First name:</label>
          <input id="contact-firstName" name="firstName" type="text" value="<%= firstName %>"/>
        </div>
        <div class="control-group">
          <label for="contact-lastName" class="control-label">Last name:</label>
          <input id="contact-lastName" name="lastName" type="text" value="<%= lastName %>"/>
        </div>
        <div class="control-group">
          <label for="contact-phoneNumber" class="control-label">Phone number:</label>
          <input id="contact-phoneNumber" name="phoneNumber" type="text" value="<%= phoneNumber %>"/>
        </div>
        <button class="btn js-submit">Save</button>
      </form>
    </script>

    <script src="./assets/js/vendor/jquery.js"></script>
    <script src="./assets/js/vendor/jquery-ui-1.10.3.js"></script>
    <script src="./assets/js/vendor/json2.js"></script>
    <script src="./assets/js/vendor/underscore.js"></script>
    <script src="./assets/js/vendor/backbone.js"></script>
    <script src="./assets/js/vendor/backbone.syphon.js"></script>
    <script src="./assets/js/vendor/backbone.localstorage.js"></script>
    <script src="./assets/js/vendor/backbone.marionette.js"></script>
    <script src="./assets/js/vendor/spin.js"></script>
    <script src="./assets/js/vendor/spin.jquery.js"></script>

    <script src="./assets/js/app.js"></script>
    <script src="./assets/js/apps/config/storage/localstorage.js"></script>
    <script src="./assets/js/entities/contact.js"></script>
    <script src="./assets/js/common/views.js"></script>

    <script src="./assets/js/apps/contacts/contacts_app.js"></script>
    <script src="./assets/js/apps/contacts/list/list_view.js"></script>
    <script src="./assets/js/apps/contacts/list/list_controller.js"></script>
    <script src="./assets/js/apps/contacts/show/show_view.js"></script>
    <script src="./assets/js/apps/contacts/show/show_controller.js"></script>
    <script src="./assets/js/apps/contacts/edit/edit_view.js"></script>
    <script src="./assets/js/apps/contacts/edit/edit_controller.js"></script>

    <script type="text/javascript">
      ContactManager.start();
    </script>
    
    <script>
            $(function() {
//                var listView = new ListBBBView();
            });
    </script>
  </body>
</html>