(function(){
  var tabs=document.querySelectorAll('#isi-tabs button');
  var panels=document.querySelectorAll('.isi-panel');
  tabs.forEach(function(b){
    b.addEventListener('click',function(){
      var id=b.getAttribute('data-panel');
      tabs.forEach(function(x){x.classList.remove('is-active')});
      b.classList.add('is-active');
      panels.forEach(function(p){
        var show=p.getAttribute('data-panel')===id;
        p.hidden=!show;
        p.classList.toggle('is-active',show);
      });
    });
  });
  var h=(location.hash||'').replace('#','');
  if(h==='inventory'||h==='subscriptions'||h==='invoices'){
    var map={inventory:'inventory',subscriptions:'subscriptions',invoices:'invoices'};
    var btn=document.querySelector('#isi-tabs [data-panel="'+map[h]+'"]');
    if(btn)btn.click();
  }
})();
