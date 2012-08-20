if (Meteor.is_client) {
  Template.index.greeting = function () {
    return "Welcome to DreamsLinked.";
  };

  Template.index.events = {
    'click input' : function () {
      // template data, if any, is available in 'this'
      if (typeof console !== 'undefined')
        console.log("You pressed the button");
    }
  };
}

if (Meteor.is_server) {
  Meteor.startup(function () {
    // code to run on server at startup
  });
}