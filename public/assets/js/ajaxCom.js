function filterBacklinks(blj) {
    var bl = $.parseJSON(blj);
    var bll = $("#backLinkList");
    bll.empty();
    if(bl.length <= 0) {
        var out = '<li class="menuitem">no backlinks found</li>';
        bll.append(out);
    }
    for(var i=0; i<bl.length; i++) {
        var out = '<li class="menuitem"><a href="/platform/backlinks/'+bl[i].anchortag+'">'+bl[i].anchortag+'</a></li>';
        bll.append(out);
    }
}

function filterUsers(uj) {
    var u = $.parseJSON(uj);
    var ul = $("#usertable");
    $(".usertable-row").remove();
    for(var i=0; i<u.length; i++) {
        var out = '<tr class="usertable-row"><td>'+u[i].id+'</td><td onclick="showUser(event)">'+u[i].username+'</td><td>'+u[i].level+'</td></tr>';
        ul.append(out);
    }
}

function filterPendingLinks(plj) {
    var pl = $.parseJSON(plj);
    var pll = $("#pendingtable");
    $(".pendingtable-row").remove();
    for(var i=0; i<pl.length; i++) {
        var out = '<tr class="pendingtable-row"><td>'+pl[i].id+'</td><td>'+pl[i].link+'</td><td>'+pl[i].anchortag+'</td><td>'+pl[i].sister+'</td></tr>';
        pll.append(out);
    }
}
