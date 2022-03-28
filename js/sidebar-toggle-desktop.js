var mini = false;

function toggleSidebar() {
  if (mini) {
    document.getElementById("sidebar-admin-text").style.display = "";
    document.getElementById("sidebar-home-text").style.display = "";
    document.getElementById("sidebar-articles-text").style.display = "";
    document.getElementById("sidebar-events-text").style.display = "";
    document.getElementById("sidebar-topics-text").style.display = "";
    document.getElementById("sidebar-friends-text").style.display = "";
    document.getElementById("sidebar-pages-text").style.display = "";
    document.getElementById("sidebar-groups-text").style.display = "";
    document.getElementById("sidebar-chat-text").style.display = "";
    document.getElementById("sidebar-games-text").style.display = "";
    document.getElementById("sidebar-wrapper").style.width = "250px";
    document.getElementById("page-content-wrapper").style.marginLeft = "0px";
    this.mini = false;
  } else {
    document.getElementById("sidebar-admin-text").style.display = "none";
    document.getElementById("sidebar-home-text").style.display = "none";
    document.getElementById("sidebar-articles-text").style.display = "none";
    document.getElementById("sidebar-events-text").style.display = "none";
    document.getElementById("sidebar-topics-text").style.display = "none";
    document.getElementById("sidebar-friends-text").style.display = "none";
    document.getElementById("sidebar-pages-text").style.display = "none";
    document.getElementById("sidebar-groups-text").style.display = "none";
    document.getElementById("sidebar-chat-text").style.display = "none";
    document.getElementById("sidebar-games-text").style.display = "none";
    document.getElementById("sidebar-wrapper").style.width = "75px";
    document.getElementById("page-content-wrapper").style.marginLeft = "-170px";
    this.mini = true;
  }
}