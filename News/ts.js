$("#tsviewer").tsviewer({
    // mandatory server address
    host: "50.150.2.89",
    port: "9987",
    // optional tooltip patterns
    serverTip:  "Clients: $users/$slots",
    channelTip: "Codec: $codec",
    clientTip:  "Version: $version on $platform",
    // optional callbacks
    onNode:  function(elem, node) {
      // your code
    },
    onReady: function(data, count) {
      // your code
    },
    onError: function(error) {
      // your code
    }
});

$("#refresh").click(function() {
    // shortcut to refresh the tree
    $("#tsviewer").tsviewerRefresh(true);
});
      
$("#expand").click(function() {
    // shortcut to expand all nodes
    $("#tsviewer").tsviewerExpand();
});
      
$("#collapse").click(function() {
    // shortcut to collapse all nodes
    $("#tsviewer").tsviewerCollapse();
});