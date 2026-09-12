(function(){
  var flows = {
    search: [
      {t:'typing',ms:400},
      {t:'user',text:'I need running shoes under ₹2,000.'},
      {t:'typing',ms:700},
      {t:'bot',text:'Sure! Here are some options for you.'},
      {t:'prod',name:'Aero Run Pro',price:'₹1,899'},
      {t:'prod',name:'Flex Trail Lite',price:'₹1,599'},
      {t:'prod',name:'City Sprint',price:'₹1,299'},
      {t:'chips',opts:['View Product','Buy Now'],pick:'Buy Now'},
      {t:'user',text:'Buy Now'},
      {t:'typing',ms:500},
      {t:'bot',text:'Product added to cart ✓'}
    ],
    cart: [
      {t:'typing',ms:500},
      {t:'bot',text:'You left something behind '},
      {t:'bot',text:'Your Running Shoes are still in your cart.'},
      {t:'chips',opts:['Complete Order','View Cart'],pick:'Complete Order'},
      {t:'user',text:'Complete Order'},
      {t:'typing',ms:600},
      {t:'bot',text:'Your cart is ready for checkout.'}
    ],
    order: [
      {t:'typing',ms:400},
      {t:'user',text:'I just placed my order.'},
      {t:'typing',ms:700},
      {t:'bot',text:'Order confirmed! '},
      {t:'bot',text:'Order #HB10245\nAmount: ₹1,999\nPayment: Confirmed'},
      {t:'chips',opts:['View Order','Track Order'],pick:'Track Order'},
      {t:'bot',text:'Tracking details will arrive as your order ships.'}
    ],
    cod: [
      {t:'typing',ms:500},
      {t:'bot',text:'Please confirm your COD order of ₹1,999.'},
      {t:'chips',opts:['Confirm Order ✓','Cancel Order'],pick:'Confirm Order ✓'},
      {t:'user',text:'Confirm Order ✓'},
      {t:'typing',ms:500},
      {t:'bot',text:'COD Order Confirmed Successfully ✓'}
    ],
    tracking: [
      {t:'typing',ms:400},
      {t:'user',text:'Where is my order?'},
      {t:'typing',ms:700},
      {t:'bot',text:'Here is your latest order '},
      {t:'bot',text:'Order #HB10245\nStatus: Shipped\nExpected Delivery: Tomorrow'},
      {t:'chips',opts:['Track Shipment'],pick:'Track Shipment'},
      {t:'bot',text:'Shipment tracking link is ready.'}
    ],
    marketing: [
      {t:'typing',ms:500},
      {t:'bot',text:' Weekend Sale is Live'},
      {t:'bot',text:'Get up to 30% OFF selected products.'},
      {t:'chips',opts:['Shop Now →'],pick:'Shop Now →'},
      {t:'user',text:'Shop Now →'},
      {t:'prod',name:'Weekend Drop Hoodie',price:'₹1,199'},
      {t:'bot',text:'Tap the product to continue shopping.'}
    ],
    support: [
      {t:'typing',ms:400},
      {t:'user',text:'I want to return my order.'},
      {t:'typing',ms:700},
      {t:'bot',text:'Sure! I can help you with your return.'},
      {t:'chips',opts:['Return Product','Exchange Product'],pick:'Return Product'},
      {t:'user',text:'Return Product'},
      {t:'typing',ms:500},
      {t:'bot',text:'Return request created ✓'}
    ]
  };

  var body=document.getElementById('woo-body');
  var typing=document.getElementById('woo-typing');
  var chips=document.getElementById('woo-chips');
  var tabs=document.getElementById('woo-tabs');
  if(!body||!typing||!tabs) return;
  var timer=null;
  var reduced=window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  function clear(){
    body.querySelectorAll('.woo-msg,.woo-prod').forEach(function(m){m.remove();});
    chips.classList.remove('on');chips.innerHTML='';typing.classList.remove('on');
  }
  function addMsg(kind,text){
    var d=document.createElement('div');
    d.className='woo-msg '+kind;
    d.innerHTML=(text||'').replace(/\n/g,'<br>');
    body.insertBefore(d,typing);
    requestAnimationFrame(function(){d.classList.add('show');});
    body.scrollTop=body.scrollHeight;
  }
  function addProd(name,price){
    var d=document.createElement('div');
    d.className='woo-prod';
    d.innerHTML='<div class="ph"></div><div class="meta"><b>'+name+'</b><span>'+price+'</span></div>';
    body.insertBefore(d,typing);
    requestAnimationFrame(function(){d.classList.add('show');});
    body.scrollTop=body.scrollHeight;
  }
  function run(name){
    if(timer){clearTimeout(timer);timer=null;}
    clear();
    var steps=flows[name]||flows.search; var i=0;
    function next(){
      if(i>=steps.length){timer=setTimeout(function(){run(name);},2800);return;}
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
  run('search');

  var eventBtns = document.querySelectorAll('.woo-event-btn');
  var eventOut = document.getElementById('woo-event-out');
  var eventMap = {
    order: 'Your order #HB10245 has been confirmed \nAmount: ₹1,999 · Payment received',
    payment: 'Payment received for order #HB10245 ✓\nThank you for shopping with us!',
    shipped: 'Order #HB10245 is on the way \nExpected delivery: Tomorrow',
    delivered: 'Order #HB10245 delivered ✓\nWe hope you love it! Leave a review?',
    cart: 'You left something behind \nYour cart is still waiting. Complete Order →',
    customer: 'Welcome to our store! \nHow can we help you today?'
  };
  if(eventBtns.length && eventOut){
    eventBtns.forEach(function(btn){
      btn.addEventListener('click',function(){
        eventBtns.forEach(function(b){b.classList.remove('is-active');});
        btn.classList.add('is-active');
        var key = btn.getAttribute('data-event');
        eventOut.innerHTML = (eventMap[key]||'').replace(/\n/g,'<br>');
      });
    });
  }

  document.querySelectorAll('.faq-question').forEach(function(btn){
    btn.addEventListener('click',function(){
      var item=btn.closest('.faq-item');
      var open=item.classList.contains('open');
      document.querySelectorAll('.faq-item.open').forEach(function(x){if(x!==item)x.classList.remove('open');});
      item.classList.toggle('open',!open);
      btn.setAttribute('aria-expanded',(!open).toString());
    });
  });
})();
