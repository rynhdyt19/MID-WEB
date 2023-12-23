document.getElementById('toggleSidebar').addEventListener('click', function() {
    var sidebar = document.getElementById('sidebar');
    var main = document.querySelector('main');
  
    if (sidebar.style.width === '200px') {
      sidebar.style.width = '50px';
      main.style.marginLeft = '50px';
    } else {
      sidebar.style.width = '200px';
      main.style.marginLeft = '200px';
    }
  });
  
