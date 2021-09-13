let backtop = document.getElementById("btntop");
function totopFunc(){
    document.body.scrollTop =0;
    document.documentElement.scrollTop=0;
};
function togglebar() {
    var x = document.getElementById('header-nav');
    x.classList.toggle('show');    
  };

  document.getElementById("bosai").style.display='block';
  document.getElementById("ict").style.display = 'none';
  document.getElementById("sokuryo").style.display = 'none';
  document.getElementById("chosa").style.display = 'none';

  document.getElementById("clickBosai").onclick = function(){
      document.getElementById("bosai").style.display='block';
      document.getElementById("ict").style.display = 'none';
      document.getElementById("sokuryo").style.display = 'none';
      document.getElementById("chosa").style.display = 'none';
  };
  document.getElementById("clickIct").onclick = function(){
      document.getElementById("bosai").style.display='none';
      document.getElementById("ict").style.display = 'block';
      document.getElementById("sokuryo").style.display = 'none';
      document.getElementById("chosa").style.display = 'none';
  };
  document.getElementById("clickSokuryo").onclick = function(){
      document.getElementById("bosai").style.display='none';
      document.getElementById("ict").style.display = 'none';
      document.getElementById("sokuryo").style.display = 'block';
      document.getElementById("chosa").style.display = 'none';
  };
  document.getElementById("clickChosa").onclick = function(){
      document.getElementById("bosai").style.display='none';
      document.getElementById("ict").style.display = 'none';
      document.getElementById("sokuryo").style.display = 'none';
      document.getElementById("chosa").style.display = 'block';
  };

