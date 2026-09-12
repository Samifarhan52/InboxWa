(function(){
  var flows = {
    cart: [
      {t:'typing',ms:500},
      {t:'bot',text:'You left something behind ️'},
      {t:'bot',text:'Your Premium Sneakers are waiting in your cart.'},
      {t:'chips',opts:['Complete Order →','View Cart'],pick:'Complete Order →'},
      {t:'user',text:'Complete Order →'},
      {t:'typing',ms:600},
      {t:'bot',text:'Great! Your order is ready for checkout.'}
    ],
    search: [
      {t:'typing',ms:400},
      {t:'user',text:'I need black shoes under ₹2,000.'},
      {t:'typing',ms:700},
      {t:'bot',text:'Sure! Here are some options I found for you.'},
      {t:'prod',name:'Urban Black Sneaker',price:'₹1,799'},
      {t:'prod',name:'Classic Slip-On',price:'₹1,499'},
      {t:'chips',opts:['Buy Now →','View Product'],pick:'Buy Now →'},
      {t:'bot',text:'Opening checkout for your selection…'}
    ],
    track: [
      {t:'typing',ms:400},
      {t:'user',text:'Where is my order?'},
      {t:'typing',ms:700},
      {t:'bot',text:'Here’s your latest order '},
      {t:'bot',text:'Order #HB10245 · Shipped'},
      {t:'bot',text:'Expected delivery: Tomorrow'},
      {t:'chips',opts:['Track Order','View Order'],pick:'Track Order'},
      {t:'bot',text:'Tracking link is ready in the next message from your store.'}
    ],
    cod: [
      {t:'typing',ms:500},
      {t:'bot',text:'Please confirm your COD order of ₹1,999.'},
      {t:'chips',opts:['Confirm Order ✓','Cancel Order'],pick:'Confirm Order ✓'},
      {t:'user',text:'Confirm Order ✓'},
      {t:'typing',ms:500},
      {t:'bot',text:'Order confirmed successfully! '}
    ],
    marketing: [
      {t:'typing',ms:500},
      {t:'bot',text:' Weekend Sale is Live!'},
      {t:'bot',text:'Get up to 30% OFF selected products.'},
      {t:'chips',opts:['Shop Now →'],pick:'Shop Now →'},
      {t:'user',text:'Shop Now →'},
      {t:'prod',name:'Festival Drop Tee',price:'₹999'},
      {t:'bot',text:'Tap the product to continue on your store.'}
    ],
    support: [
      {t:'typing',ms:400},
      {t:'user',text:'I want to return my order.'},
      {t:'typing',ms:700},
      {t:'bot',text:'Sure! I can help you with the return.'},
      {t:'chips',opts:['Start Return','Exchange Product'],pick:'Start Return'},
      {t:'user',text:'Start Return'},
      {t:'typing',ms:500},
      {t:'bot',text:'Return request created ✓ Our team will share next steps.'}
    ]
  };

  var body=document.getElementById('shy-body');
  var typing=document.getElementById('shy-typing');
  var chips=document.getElementById('shy-chips');
  var tabs=document.getElementById('shy-tabs');
  if(!body||!typing||!tabs) return;
  var timer=null;
  var reduced=window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  function clear(){
    body.querySelectorAll('.shy-msg,.shy-prod').forEach(function(m){m.remove();});
    chips.classList.remove('on');chips.innerHTML='';typing.classList.remove('on');
  }
  function addMsg(kind,text){
    var d=document.createElement('div');
    d.className='shy-msg '+kind;d.textContent=text;
    body.insertBefore(d,typing);
    requestAnimationFrame(function(){d.classList.add('show');});
  }
  function addProd(name,price){
    var d=document.createElement('div');
    d.className='shy-prod';
    d.innerHTML='<div class="ph"></div><div class="meta"><b>'+name+'</b><span>'+price+'</span></div>';
    body.insertBefore(d,typing);
    requestAnimationFrame(function(){d.classList.add('show');});
  }
  function run(name){
    if(timer){clearTimeout(timer);timer=null;}
    clear();
    var steps=flows[name]||flows.cart; var i=0;
    function next(){
      if(i>=steps.length){timer=setTimeout(function(){run(name);},3000);return;}
      var s=steps[i++];
      if(s.t==='typing'){
        typing.classList.add('on');
        timer=setTimeout(function(){typing.classList.remove('on');next();},reduced?0:(s.ms||600));
      } else if(s.t==='user'||s.t==='bot'){
        addMsg(s.t,s.text); timer=setTimeout(next,reduced?0:650);
      } else if(s.t==='prod'){
        addProd(s.name,s.price); timer=setTimeout(next,reduced?0:700);
      } else if(s.t==='chips'){
        chips.innerHTML='';
        (s.opts||[]).forEach(function(o){
          var b=document.createElement('button');b.type='button';b.textContent=o;
          if(o===s.pick)b.className='pick';chips.appendChild(b);
        });
        chips.classList.add('on');
        timer=setTimeout(function(){
          if(s.pick) addMsg('user',s.pick);
          timer=setTimeout(next,reduced?0:500);
        },reduced?0:900);
      } else next();
    }
    next();
  }
  tabs.querySelectorAll('button[data-flow]').forEach(function(btn){
    btn.addEventListener('click',function(){
      tabs.querySelectorAll('button').forEach(function(b){b.classList.remove('is-active');});
      btn.classList.add('is-active');
      run(btn.getAttribute('data-flow'));
    });
  });
  run('cart');
})();
