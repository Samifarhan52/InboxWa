(function(){
  var tabs=document.querySelectorAll('#mscs-tabs button');
  var panels=document.querySelectorAll('.mscs-panel');
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
  // deep link hash
  var h=(location.hash||'').replace('#','');
  if(h==='sales'||h==='service'||h==='marketing'){
    var btn=document.querySelector('#mscs-tabs [data-panel="'+h+'"]');
    if(btn)btn.click();
  }
  var steps=['Ad Click','WhatsApp Chat','Lead Captured','CRM Created','Sales Follow-up','Customer Purchase','Support Request','Agent Resolution','Follow-up'];
  var out=document.getElementById('mscs-play-out');
  var play=document.getElementById('mscs-play');
  if(play&&out){
    play.addEventListener('click',function(){
      var i=0;out.textContent='Playing…';
      var t=setInterval(function(){
        out.textContent=steps.slice(0,i+1).join(' → ');
        i++;
        if(i>=steps.length)clearInterval(t);
      },500);
    });
  }
})();
