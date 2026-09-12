(function(){
  var codes = {
    curl: 'curl -X POST "https://api.inboxwa.com/v1/messages" \\\n  -H "Authorization: Bearer inb_live_sec_918050854445" \\\n  -H "Content-Type: application/json" \\\n  -d \'{\n    "messaging_product": "whatsapp",\n    "recipient_type": "individual",\n    "to": "+918050854445",\n    "type": "template",\n    "template": {\n      "name": "order_confirmation",\n      "language": { "code": "en_US" },\n      "components": [\n        {\n          "type": "body",\n          "parameters": [\n            { "type": "text", "text": "Aanya Kapoor" },\n            { "type": "text", "text": "ORD-84920" },\n            { "type": "text", "text": "₹2,499" }\n          ]\n        }\n      ]\n    }\n  }\'',

    js: 'const axios = require(\'axios\');\n\nasync function sendWhatsAppNotification() {\n  try {\n    const response = await axios.post(\n      \'https://api.inboxwa.com/v1/messages\',\n      {\n        messaging_product: \'whatsapp\',\n        recipient_type: \'individual\',\n        to: \'+918050854445\',\n        type: \'template\',\n        template: {\n          name: \'order_confirmation\',\n          language: { code: \'en_US\' },\n          components: [\n            {\n              type: \'body\',\n              parameters: [\n                { type: \'text\', text: \'Aanya Kapoor\' },\n                { type: \'text\', text: \'ORD-84920\' },\n                { type: \'text\', text: \'₹2,499\' }\n              ]\n            }\n          ]\n        }\n      },\n      {\n        headers: {\n          \'Authorization\': `Bearer ${process.env.INBOXWA_API_KEY || \'inb_live_sec_918050854445\'}`,\n          \'Content-Type\': \'application/json\'\n        }\n      }\n    );\n\n    console.log(\'Message dispatched ID:\', response.data.messages[0].id);\n    return response.data;\n  } catch (err) {\n    console.error(\'InboxWa API Error:\', err.response?.data || err.message);\n  }\n}\n\nsendWhatsAppNotification();',

    py: 'import os\nimport requests\n\nAPI_URL = "https://api.inboxwa.com/v1/messages"\nAPI_KEY = os.getenv("INBOXWA_API_KEY", "inb_live_sec_918050854445")\n\nheaders = {\n    "Authorization": f"Bearer {API_KEY}",\n    "Content-Type": "application/json"\n}\n\npayload = {\n    "messaging_product": "whatsapp",\n    "recipient_type": "individual",\n    "to": "+918050854445",\n    "type": "template",\n    "template": {\n        "name": "order_confirmation",\n        "language": {"code": "en_US"},\n        "components": [\n            {\n                "type": "body",\n                "parameters": [\n                    {"type": "text", "text": "Aanya Kapoor"},\n                    {"type": "text", "text": "ORD-84920"},\n                    {"type": "text", "text": "₹2,499"}\n                ]\n            }\n        ]\n    }\n}\n\nresponse = requests.post(API_URL, headers=headers, json=payload)\nprint(f"HTTP Status: {response.status_code}")\nprint("Response Payload:", response.json())',

    php: '<?php\n$apiKey = getenv(\'INBOXWA_API_KEY\') ?: \'inb_live_sec_918050854445\';\n$apiUrl = \'https://api.inboxwa.com/v1/messages\';\n\n$payload = [\n    \'messaging_product\' => \'whatsapp\',\n    \'recipient_type\' => \'individual\',\n    \'to\' => \'+918050854445\',\n    \'type\' => \'template\',\n    \'template\' => [\n        \'name\' => \'order_confirmation\',\n        \'language\' => [\'code\' => \'en_US\'],\n        \'components\' => [\n            [\n                \'type\' => \'body\',\n                \'parameters\' => [\n                    [\'type\' => \'text\', \'text\' => \'Aanya Kapoor\'],\n                    [\'type\' => \'text\', \'text\' => \'ORD-84920\'],\n                    [\'type\' => \'text\', \'text\' => \'₹2,499\']\n                ]\n            ]\n        ]\n    ]\n];\n\n$ch = curl_init($apiUrl);\ncurl_setopt_array($ch, [\n    CURLOPT_POST => true,\n    CURLOPT_RETURNTRANSFER => true,\n    CURLOPT_HTTPHEADER => [\n        \'Authorization: Bearer \' . $apiKey,\n        \'Content-Type: application/json\'\n    ],\n    CURLOPT_POSTFIELDS => json_encode($payload)\n]);\n\n$response = curl_exec($ch);\n$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);\ncurl_close($ch);\n\necho "HTTP Status: " . $httpCode . "\\n";\necho "Response: " . $response . "\\n";'
  };

  var block = document.getElementById('api-code-block');
  var copyBtn = document.getElementById('copy-code-btn');
  var currentLang = 'curl';

  function updateCode(lang) {
    currentLang = lang;
    if (block) {
      block.innerHTML = '<code>' + (codes[lang] || codes.curl).replace(/</g, '&lt;').replace(/>/g, '&gt;') + '</code>';
    }
  }

  document.querySelectorAll('#api-code-tabs button').forEach(function(b){
    b.addEventListener('click', function(){
      document.querySelectorAll('#api-code-tabs button').forEach(function(x){ x.classList.remove('is-active'); });
      b.classList.add('is-active');
      var lang = b.getAttribute('data-lang');
      updateCode(lang);
    });
  });

  if (copyBtn) {
    copyBtn.addEventListener('click', function(){
      var textToCopy = codes[currentLang] || codes.curl;
      navigator.clipboard.writeText(textToCopy).then(function(){
        copyBtn.innerHTML = '✓ Copied to Clipboard!';
        setTimeout(function(){
          copyBtn.innerHTML = '📋 Copy Code';
        }, 2000);
      });
    });
  }

  // Interactive Live Request Simulator
  var out = document.getElementById('api-test-out');
  var btn = document.getElementById('api-test');
  if (btn && out) {
    var logs = [
      '⚡ [00ms] Initializing TLS 1.3 connection to api.inboxwa.com:443...',
      '🔑 [24ms] Authenticating Bearer token (inb_live_••••••••)... OK (200)',
      '📦 [48ms] Validating WhatsApp template "order_confirmation" against Meta Graph v21.0...',
      '🚀 [86ms] Cloud API gateway accepted message sequence. Queue position #1',
      '✅ [118ms] HTTP/1.1 200 OK\n{\n  "messaging_product": "whatsapp",\n  "contacts": [{ "input": "+918050854445", "wa_id": "918050854445" }],\n  "messages": [{ "id": "wamid.HBgLOTE4MDUwODU0NDQ1FQIAEhgWM0VCMDAxMkJFQ0QwNDk5OTQyM0I0MQA=", "message_status": "accepted" }]\n}'
    ];

    btn.addEventListener('click', function(){
      btn.disabled = true;
      btn.style.opacity = '0.7';
      var i = 0;
      out.style.whiteSpace = 'pre-wrap';
      out.textContent = logs[0];
      var t = setInterval(function(){
        i++;
        if (i >= logs.length) {
          clearInterval(t);
          btn.disabled = false;
          btn.style.opacity = '1';
          return;
        }
        out.textContent += '\n' + logs[i];
      }, 350);
    });
  }

  // Workflow Trigger & Action Tester
  var run = document.getElementById('api-run'), rout = document.getElementById('api-run-out');
  if (run && rout) {
    run.addEventListener('click', function(){
      var tr = document.getElementById('api-trigger');
      var ac = document.getElementById('api-action');
      var trVal = tr ? tr.value : 'Shopify Order';
      var acVal = ac ? ac.value : 'Send Order Notification';
      
      rout.style.whiteSpace = 'pre-wrap';
      rout.textContent = '🚀 Webhook Event Dispatched:\n' +
        'HEADER: X-InboxWa-Event: ' + trVal.toLowerCase().replace(/[^a-z0-9]/g, '.') + '\n' +
        'HEADER: X-InboxWa-Signature: sha256=' + Array.from({length: 32}, () => Math.floor(Math.random()*16).toString(16)).join('') + '\n' +
        'ACTION TRIGGERED: ' + acVal + '\n\n' +
        'PAYLOAD:\n{\n  "event": "' + trVal + '",\n  "timestamp": ' + Math.floor(Date.now()/1000) + ',\n  "customer": {\n    "phone": "+91 80508 54445",\n    "name": "Karan Patel",\n    "tags": ["vip", "inbound-api"]\n  },\n  "status": "success",\n  "latency_ms": 94\n}';
    });
  }
})();
