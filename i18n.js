/**
 * InboxWa Internationalization (i18n) Engine
 * Multi-Language: English (EN), Arabic (AR), Spanish (ES), Portuguese (PT), German (DE), French (FR)
 * Seamless 2-tier architecture:
 * 1. Instant 0ms Client DOM Translation (Nav, Headers, Badges, CTAs)
 * 2. Full-Page Deep Neural Translation via Google Website Translator Engine
 * 3. Persistence across page navigations & sessions via googtrans cookie & localStorage
 */
(function () {
  'use strict';

  var LABELS = {
    en: 'EN',
    ar: 'AR',
    es: 'ES',
    pt: 'PT',
    de: 'DE',
    fr: 'FR'
  };

  var FULL_NAMES = {
    en: 'English',
    ar: 'العربية',
    es: 'Español',
    pt: 'Português',
    de: 'Deutsch',
    fr: 'Français'
  };

  // Common UI Elements Instant Translation Map
  var UI_STRINGS = {
    ar: {
      'Products': 'المنتجات',
      'Features': 'المميزات',
      'Channels': 'القنوات',
      'Solutions': 'الحلول',
      'Business Leads': 'عملاء الأعمال',
      'Pricing': 'الأسعار',
      'Partners': 'الشركاء',
      'Company': 'الشركة',
      'Login': 'تسجيل الدخول',
      'Start Free': 'ابدأ مجانًا',
      'Book a Demo': 'احجز عرضًا',
      'About': 'من نحن',
      'Careers': 'الوظائف',
      'Contact': 'اتصل بنا',
      'Security': 'الأمان',
      'Privacy': 'الخصوصية',
      'Terms': 'الشروط والأحكام',
      'Privacy policy': 'سياسة الخصوصية',
      'Terms of service': 'شروط الخدمة',
      'See InboxWa in Action': 'شاهد InboxWa قيد التشغيل',
      'Start 7-Day Free Trial': 'ابدأ تجربة مجانية لمدة 7 أيام',
      'Schedule 1-on-1 Call': 'احجز مكالمة فردية'
    },
    es: {
      'Products': 'Productos',
      'Features': 'Funciones',
      'Channels': 'Canales',
      'Solutions': 'Soluciones',
      'Business Leads': 'Leads de Negocios',
      'Pricing': 'Precios',
      'Partners': 'Socios',
      'Company': 'Empresa',
      'Login': 'Iniciar Sesión',
      'Start Free': 'Empezar Gratis',
      'Book a Demo': 'Reservar Demo',
      'About': 'Sobre Nosotros',
      'Careers': 'Empleo',
      'Contact': 'Contacto',
      'Security': 'Seguridad',
      'Privacy': 'Privacidad',
      'Terms': 'Términos',
      'Privacy policy': 'Política de privacidad',
      'Terms of service': 'Términos de servicio',
      'See InboxWa in Action': 'Ver InboxWa en Acción',
      'Start 7-Day Free Trial': 'Prueba Gratis de 7 Días',
      'Schedule 1-on-1 Call': 'Agendar Llamada 1-a-1'
    },
    pt: {
      'Products': 'Produtos',
      'Features': 'Recursos',
      'Channels': 'Canais',
      'Solutions': 'Soluções',
      'Business Leads': 'Leads Comerciais',
      'Pricing': 'Preços',
      'Partners': 'Parceiros',
      'Company': 'Empresa',
      'Login': 'Entrar',
      'Start Free': 'Começar Grátis',
      'Book a Demo': 'Agendar Demo',
      'About': 'Sobre Nós',
      'Careers': 'Carreiras',
      'Contact': 'Contato',
      'Security': 'Segurança',
      'Privacy': 'Privacidade',
      'Terms': 'Termos',
      'Privacy policy': 'Política de privacidade',
      'Terms of service': 'Termos de serviço',
      'See InboxWa in Action': 'Veja o InboxWa em Ação',
      'Start 7-Day Free Trial': 'Teste Grátis por 7 Dias',
      'Schedule 1-on-1 Call': 'Agendar Chamada 1-a-1'
    },
    de: {
      'Products': 'Produkte',
      'Features': 'Funktionen',
      'Channels': 'Kanäle',
      'Solutions': 'Lösungen',
      'Business Leads': 'Geschäfts-Leads',
      'Pricing': 'Preise',
      'Partners': 'Partner',
      'Company': 'Unternehmen',
      'Login': 'Anmelden',
      'Start Free': 'Kostenlos starten',
      'Book a Demo': 'Demo buchen',
      'About': 'Über Uns',
      'Careers': 'Karriere',
      'Contact': 'Kontakt',
      'Security': 'Sicherheit',
      'Privacy': 'Datenschutz',
      'Terms': 'AGB',
      'Privacy policy': 'Datenschutzerklärung',
      'Terms of service': 'Nutzungsbedingungen',
      'See InboxWa in Action': 'InboxWa in Aktion sehen',
      'Start 7-Day Free Trial': '7 Tage kostenlos testen',
      'Schedule 1-on-1 Call': '1-zu-1 Anruf vereinbaren'
    },
    fr: {
      'Products': 'Produits',
      'Features': 'Fonctionnalités',
      'Channels': 'Canaux',
      'Solutions': 'Solutions',
      'Business Leads': 'Prospects Pro',
      'Pricing': 'Tarifs',
      'Partners': 'Partenaires',
      'Company': 'Entreprise',
      'Login': 'Connexion',
      'Start Free': 'Commencer Gratuit',
      'Book a Demo': 'Réserver une démo',
      'About': 'À Propos',
      'Careers': 'Carrières',
      'Contact': 'Contact',
      'Security': 'Sécurité',
      'Privacy': 'Confidentialité',
      'Terms': 'Conditions',
      'Privacy policy': 'Politique de confidentialité',
      'Terms of service': 'Conditions d’utilisation',
      'See InboxWa in Action': 'Découvrir InboxWa en Action',
      'Start 7-Day Free Trial': 'Essai gratuit de 7 jours',
      'Schedule 1-on-1 Call': 'Planifier un appel 1-à-1'
    }
  };

  // Detailed Key Dictionaries for [data-i18n]
  var T = {
    en: {
      hero_badge: 'Official WhatsApp Business API · Instagram · Facebook · Telegram',
      hero_title: 'Engage customers on WhatsApp & every channel — from one platform',
      hero_lead: 'InboxWa combines Official WhatsApp Business API, omnichannel inbox, smart automation and team tools so sales and support scale without chaos.',
      cta_trial: 'Start Free Trial',
      cta_demo: 'Book a Demo',
      pill_api: 'Official WhatsApp API',
      pill_inbox: 'Omnichannel Inbox',
      pill_auto: 'Automation & Flows',
      pill_broadcast: 'Broadcasts',
      pill_crm: 'CRM & Integrations',
      trusted_label: 'Trusted by teams running customer messaging at scale',
      why_badge: 'Why InboxWa',
      why_title: 'WhatsApp API + Omnichannel, built for business',
      why_lead: 'One platform for Official WhatsApp, Instagram, Facebook, Telegram, Live Chat and Voice — with automation your team can actually run.',
      why_c1_t: 'Official WhatsApp API',
      why_c1_p: 'Meta-approved Business API, templates, green-tick and high-volume delivery you can trust.',
      why_c2_t: 'True Omnichannel',
      why_c2_p: 'WhatsApp, Instagram, Facebook, Telegram, Live Chat & Voice in one shared customer timeline.',
      why_c3_t: 'Automation that ships',
      why_c3_p: 'Flows, triggers, broadcasts and chatbots for support, sales, carts and appointments.',
      prod_badge: 'Products',
      prod_title: 'Everything in one InboxWa account',
      prod_lead: 'From first WhatsApp message to closed deal — inbox, campaigns, flows and CRM together.',
      ind_badge: 'Industries',
      ind_title: 'Built for teams that message every day',
      ind_lead: 'WhatsApp Business API & omnichannel automation for E-commerce, Education, Healthcare, IT, Hotels, Restaurants and more — scale customer messaging with InboxWa.',
      ind_ecom_t: 'E-commerce', ind_ecom_p: 'Cart recovery, order updates and support on Official WhatsApp API.',
      ind_edu_t: 'Education', ind_edu_p: 'Admissions, fee reminders and parent communication automation.',
      ind_health_t: 'Healthcare', ind_health_p: 'Appointment booking, reminders and patient follow-ups on WhatsApp.',
      ind_it_t: 'Communication & IT', ind_it_p: 'Support desks, alerts and client messaging for IT & telecom teams.',
      ind_hotel_t: 'Hotel & Restaurant', ind_hotel_p: 'Reservations, table booking and guest care on WhatsApp & Instagram.',
      ind_re_t: 'Real Estate', ind_re_p: 'Lead capture, site-visit booking and broker team inbox automation.',
      int_badge: 'Integrations',
      int_title: 'Connect your stack',
      res_badge: 'Results',
      res_title: 'Outcomes teams measure',
      cta_title: 'Start on Official WhatsApp API today',
      cta_lead: 'Free trial available. Inbox, campaigns, automation and integrations — ready for your team.',
      contact_title: 'Get in touch',
      contact_form_title: 'Send a message'
    },
    ar: {
      hero_badge: 'واجهة واتساب الرسمية · إنستغرام · فيسبوك · تيليغرام',
      hero_title: 'تواصل مع عملائك على واتساب وكل القنوات — من منصة واحدة',
      hero_lead: 'تجمع InboxWa بين واتساب الرسمي للأعمال وصندوق الوارد متعدد القنوات والأتمتة وأدوات الفريق لتنمية المبيعات والدعم بسلاسة.',
      cta_trial: 'ابدأ تجربة مجانية',
      cta_demo: 'احجز عرضًا',
      pill_api: 'واتساب API الرسمي',
      pill_inbox: 'صندوق وارد موحّد',
      pill_auto: 'أتمتة ومسارات',
      pill_broadcast: 'رسائل جماعية',
      pill_crm: 'CRM وتكاملات',
      trusted_label: 'موثوق به من فرق تراسل العملاء يوميًا',
      why_badge: 'لماذا InboxWa',
      why_title: 'واتساب API وقنوات متعددة للأعمال',
      why_lead: 'منصة واحدة لواتساب الرسمي وإنستغرام وفيسبوك وتيليغرام والدردشة — بأتمتة يمكن لفريقك تشغيلها.',
      why_c1_t: 'واتساب API الرسمي',
      why_c1_p: 'واجهة ميتا المعتمدة والقوالب والعلامة الخضراء وتسليم عالي الحجم.',
      why_c2_t: 'قنوات متعددة حقيقية',
      why_c2_p: 'واتساب وإنستغرام وفيسبوك وتيليغرام في خط زمني واحد للعميل.',
      why_c3_t: 'أتمتة جاهزة للعمل',
      why_c3_p: 'مسارات وتنبيهات ورسائل جماعية وروبوتات للمبيعات والدعم.',
      prod_badge: 'المنتجات',
      prod_title: 'كل شيء في حساب InboxWa واحد',
      prod_lead: 'من أول رسالة واتساب إلى إغلاق الصفقة — صندوق وارد وحملات ومسارات وCRM.',
      ind_badge: 'القطاعات',
      ind_title: 'مصمم للفرق التي تراسل كل يوم',
      ind_lead: 'واتساب API وأتمتة متعددة القنوات للتجارة والتعليم والرعاية وتقنية المعلومات والفنادق والمطاعم.',
      ind_ecom_t: 'التجارة الإلكترونية', ind_ecom_p: 'استرجاع السلة وتحديثات الطلبات والدعم عبر واتساب.',
      ind_edu_t: 'التعليم', ind_edu_p: 'القبول وتذكير الرسوم وتواصل أولياء الأمور.',
      ind_health_t: 'الرعاية الصحية', ind_health_p: 'المواعيد والتذكيرات ومتابعة المرضى على واتساب.',
      ind_it_t: 'الاتصالات وتقنية المعلومات', ind_it_p: 'مكاتب الدعم والتنبيهات ومراسلة العملاء لفرق IT.',
      ind_hotel_t: 'الفنادق والمطاعم', ind_hotel_p: 'الحجوزات والطاولات ورعاية الضيوف عبر واتساب وإنستغرام.',
      ind_re_t: 'العقارات', ind_re_p: 'التقاط العملاء وزيارات المواقع وصندوق فريق الوسطاء.',
      int_badge: 'التكاملات',
      int_title: 'اربط أنظمتك',
      res_badge: 'النتائج',
      res_title: 'نتائج تقيسها الفرق',
      cta_title: 'ابدأ مع واتساب API الرسمي اليوم',
      cta_lead: 'تجربة مجانية متاحة. صندوق وارد وحملات وأتمتة وتكاملات.',
      contact_title: 'تواصل معنا',
      contact_form_title: 'أرسل رسالة'
    },
    es: {
      hero_badge: 'API oficial de WhatsApp Business · Instagram · Facebook · Telegram',
      hero_title: 'Conecta con clientes en WhatsApp y cada canal — desde una plataforma',
      hero_lead: 'InboxWa combina la API oficial de WhatsApp Business, bandeja omnicanal, automatización e herramientas de equipo para escalar ventas y soporte sin caos.',
      cta_trial: 'Empezar prueba gratis',
      cta_demo: 'Reservar demo',
      pill_api: 'API oficial de WhatsApp',
      pill_inbox: 'Bandeja omnicanal',
      pill_auto: 'Automatización y flujos',
      pill_broadcast: 'Difusiones',
      pill_crm: 'CRM e integraciones',
      trusted_label: 'Equipos que mensajear a escala confían en nosotros',
      why_badge: 'Por qué InboxWa',
      why_title: 'API de WhatsApp + omnicanal para negocios',
      why_lead: 'Una plataforma para WhatsApp oficial, Instagram, Facebook, Telegram, chat en vivo y voz — con automatización que tu equipo puede usar.',
      why_c1_t: 'API oficial de WhatsApp',
      why_c1_p: 'API de Meta aprobada, plantillas, tick verde y envío de alto volumen.',
      why_c2_t: 'Omnicanal real',
      why_c2_p: 'WhatsApp, Instagram, Facebook, Telegram y chat en una línea de tiempo del cliente.',
      why_c3_t: 'Automatización lista',
      why_c3_p: 'Flujos, disparadores, difusiones y chatbots para ventas y soporte.',
      prod_badge: 'Productos',
      prod_title: 'Todo en una cuenta InboxWa',
      prod_lead: 'Del primer mensaje de WhatsApp al cierre — bandeja, campañas, flujos y CRM.',
      ind_badge: 'Industrias',
      ind_title: 'Para equipos que mensajear cada día',
      ind_lead: 'API de WhatsApp y automatización omnicanal para e-commerce, educación, salud, IT, hoteles y restaurantes.',
      ind_ecom_t: 'E-commerce', ind_ecom_p: 'Recuperación de carrito, pedidos y soporte en WhatsApp.',
      ind_edu_t: 'Educación', ind_edu_p: 'Admisiones, cuotas y comunicación con padres.',
      ind_health_t: 'Salud', ind_health_p: 'Citas, recordatorios y seguimiento de pacientes.',
      ind_it_t: 'Comunicación e IT', ind_it_p: 'Mesas de soporte, alertas y mensajería para equipos IT.',
      ind_hotel_t: 'Hotel y restaurante', ind_hotel_p: 'Reservas, mesas y atención al huésped en WhatsApp e Instagram.',
      ind_re_t: 'Inmobiliaria', ind_re_p: 'Leads, visitas y bandeja del equipo de agentes.',
      int_badge: 'Integraciones',
      int_title: 'Conecta tu stack',
      res_badge: 'Resultados',
      res_title: 'Resultados que miden los equipos',
      cta_title: 'Empieza hoy con la API oficial de WhatsApp',
      cta_lead: 'Prueba gratis. Bandeja, campañas, automatización e integraciones.',
      contact_title: 'Contacto',
      contact_form_title: 'Enviar mensaje'
    },
    pt: {
      hero_badge: 'API oficial do WhatsApp Business · Instagram · Facebook · Telegram',
      hero_title: 'Engaje clientes no WhatsApp e em cada canal — em uma plataforma',
      hero_lead: 'A InboxWa combina a API oficial do WhatsApp Business, inbox omnichannel, automação e ferramentas de equipe para escalar vendas e suporte sem caos.',
      cta_trial: 'Começar teste grátis',
      cta_demo: 'Agendar demo',
      pill_api: 'API oficial do WhatsApp',
      pill_inbox: 'Inbox omnichannel',
      pill_auto: 'Automação e fluxos',
      pill_broadcast: 'Disparos',
      pill_crm: 'CRM e integrações',
      trusted_label: 'Confiado por equipes que mensageiam em escala',
      why_badge: 'Por que InboxWa',
      why_title: 'API do WhatsApp + omnichannel para negócios',
      why_lead: 'Uma plataforma para WhatsApp oficial, Instagram, Facebook, Telegram, chat e voz — com automação que sua equipe consegue rodar.',
      why_c1_t: 'API oficial do WhatsApp',
      why_c1_p: 'API Meta aprovada, templates, selo verde e alto volume.',
      why_c2_t: 'Omnichannel de verdade',
      why_c2_p: 'WhatsApp, Instagram, Facebook e Telegram em uma linha do tempo do cliente.',
      why_c3_t: 'Automação que entrega',
      why_c3_p: 'Fluxos, gatilhos, disparos e chatbots para vendas e suporte.',
      prod_badge: 'Produtos',
      prod_title: 'Tudo em uma conta InboxWa',
      prod_lead: 'Da primeira mensagem ao fechamento — inbox, campanhas, fluxos e CRM.',
      ind_badge: 'Indústrias',
      ind_title: 'Para equipes que mensageiam todo dia',
      ind_lead: 'API do WhatsApp e automação omnichannel para e-commerce, educação, saúde, TI, hotéis e restaurantes.',
      ind_ecom_t: 'E-commerce', ind_ecom_p: 'Recuperação de carrinho, pedidos e suporte no WhatsApp.',
      ind_edu_t: 'Educação', ind_edu_p: 'Admissões, taxas e comunicação com responsáveis.',
      ind_health_t: 'Saúde', ind_health_p: 'Consultas, lembretes e acompanhamento de pacientes.',
      ind_it_t: 'Comunicação e TI', ind_it_p: 'Suporte, alertas e mensagens para times de TI.',
      ind_hotel_t: 'Hotel e restaurante', ind_hotel_p: 'Reservas, mesas e atendimento no WhatsApp e Instagram.',
      ind_re_t: 'Imobiliário', ind_re_p: 'Leads, visitas e inbox da equipe de corretores.',
      int_badge: 'Integrações',
      int_title: 'Conecte seu stack',
      res_badge: 'Resultados',
      res_title: 'Resultados que as equipes medem',
      cta_title: 'Comece hoje com a API oficial do WhatsApp',
      cta_lead: 'Teste grátis. Inbox, campanhas, automação e integrações.',
      contact_title: 'Fale conosco',
      contact_form_title: 'Enviar mensagem'
    },
    de: {
      hero_badge: 'Offizielle WhatsApp Business API · Instagram · Facebook · Telegram',
      hero_title: 'Kunden auf WhatsApp und jedem Kanal erreichen — von einer Plattform',
      hero_lead: 'InboxWa kombiniert die offizielle WhatsApp Business API, Omnichannel-Posteingang, Automatisierung und Team-Tools für skalierbaren Vertrieb und Support.',
      cta_trial: 'Kostenlos testen',
      cta_demo: 'Demo buchen',
      pill_api: 'Offizielle WhatsApp API',
      pill_inbox: 'Omnichannel-Posteingang',
      pill_auto: 'Automatisierung & Flows',
      pill_broadcast: 'Broadcasts',
      pill_crm: 'CRM & Integrationen',
      trusted_label: 'Vertraut von Teams, die täglich Nachrichten senden',
      why_badge: 'Warum InboxWa',
      why_title: 'WhatsApp API + Omnichannel für Unternehmen',
      why_lead: 'Eine Plattform für offizielles WhatsApp, Instagram, Facebook, Telegram, Live-Chat und Voice — mit Automatisierung, die Ihr Team nutzt.',
      why_c1_t: 'Offizielle WhatsApp API',
      why_c1_p: 'Meta-genehmigte API, Vorlagen, grüner Haken und hohes Volumen.',
      why_c2_t: 'Echtes Omnichannel',
      why_c2_p: 'WhatsApp, Instagram, Facebook, Telegram in einer Kunden-Timeline.',
      why_c3_t: 'Automatisierung die liefert',
      why_c3_p: 'Flows, Trigger, Broadcasts und Chatbots für Vertrieb und Support.',
      prod_badge: 'Produkte',
      prod_title: 'Alles in einem InboxWa-Konto',
      prod_lead: 'Von der ersten WhatsApp-Nachricht bis zum Abschluss — Posteingang, Kampagnen, Flows und CRM.',
      ind_badge: 'Branchen',
      ind_title: 'Für Teams, die täglich schreiben',
      ind_lead: 'WhatsApp API und Omnichannel-Automatisierung für E-Commerce, Bildung, Gesundheit, IT, Hotels und Restaurants.',
      ind_ecom_t: 'E-Commerce', ind_ecom_p: 'Warenkorb-Wiederherstellung, Bestellungen und Support per WhatsApp.',
      ind_edu_t: 'Bildung', ind_edu_p: 'Zulassungen, Gebühren und Elternkommunikation.',
      ind_health_t: 'Gesundheit', ind_health_p: 'Termine, Erinnerungen und Patienten-Follow-ups.',
      ind_it_t: 'Kommunikation & IT', ind_it_p: 'Support-Desks, Alerts und Kundenmessaging für IT-Teams.',
      ind_hotel_t: 'Hotel & Restaurant', ind_hotel_p: 'Reservierungen, Tische und Gästebetreuung per WhatsApp & Instagram.',
      ind_re_t: 'Immobilien', ind_re_p: 'Leads, Besichtigungen und Team-Posteingang für Makler.',
      int_badge: 'Integrationen',
      int_title: 'Verbinden Sie Ihren Stack',
      res_badge: 'Ergebnisse',
      res_title: 'Kennzahlen die Teams messen',
      cta_title: 'Starten Sie heute mit der offiziellen WhatsApp API',
      cta_lead: 'Kostenlose Testphase. Posteingang, Kampagnen, Automatisierung und Integrationen.',
      contact_title: 'Kontakt',
      contact_form_title: 'Nachricht senden'
    },
    fr: {
      hero_badge: 'API WhatsApp Business officielle · Instagram · Facebook · Telegram',
      hero_title: 'Engagez vos clients sur WhatsApp et chaque canal — depuis une plateforme',
      hero_lead: 'InboxWa combine l’API WhatsApp Business officielle, une boîte de réception omnicanale, l’automatisation et des outils d’équipe pour faire évoluer ventes et support sans chaos.',
      cta_trial: 'Essai gratuit',
      cta_demo: 'Réserver une démo',
      pill_api: 'API WhatsApp officielle',
      pill_inbox: 'Boîte omnicanale',
      pill_auto: 'Automatisation et flux',
      pill_broadcast: 'Diffusions',
      pill_crm: 'CRM et intégrations',
      trusted_label: 'La confiance des équipes qui messagent à grande échelle',
      why_badge: 'Pourquoi InboxWa',
      why_title: 'API WhatsApp + omnicanal pour le business',
      why_lead: 'Une plateforme pour WhatsApp officiel, Instagram, Facebook, Telegram, chat et voix — avec une automatisation que votre équipe peut piloter.',
      why_c1_t: 'API WhatsApp officielle',
      why_c1_p: 'API Meta approuvée, modèles, coche verte et fort volume.',
      why_c2_t: 'Vrai omnicanal',
      why_c2_p: 'WhatsApp, Instagram, Facebook, Telegram sur une timeline client unique.',
      why_c3_t: 'Automatisation opérationnelle',
      why_c3_p: 'Flux, déclencheurs, diffusions et chatbots pour les ventes et le support.',
      prod_badge: 'Produits',
      prod_title: 'Tout dans un compte InboxWa',
      prod_lead: 'Du premier message WhatsApp à la signature — boîte, campagnes, flux et CRM.',
      ind_badge: 'Secteurs',
      ind_title: 'Pour les équipes qui messagent chaque jour',
      ind_lead: 'API WhatsApp et automatisation omnicanale pour e-commerce, éducation, santé, IT, hôtels et restaurants.',
      ind_ecom_t: 'E-commerce', ind_ecom_p: 'Paniers abandonnés, commandes et support sur WhatsApp.',
      ind_edu_t: 'Éducation', ind_edu_p: 'Admissions, frais et communication parents.',
      ind_health_t: 'Santé', ind_health_p: 'Rendez-vous, rappels et suivi patients sur WhatsApp.',
      ind_it_t: 'Communication et IT', ind_it_p: 'Support, alertes et messagerie client pour les équipes IT.',
      ind_hotel_t: 'Hôtel et restaurant', ind_hotel_p: 'Réservations, tables et relation client sur WhatsApp et Instagram.',
      ind_re_t: 'Immobilier', ind_re_p: 'Leads, visites et boîte d’équipe pour les agents.',
      int_badge: 'Intégrations',
      int_title: 'Connectez votre stack',
      res_badge: 'Résultats',
      res_title: 'Résultats mesurés par les équipes',
      cta_title: 'Démarrez aujourd’hui avec l’API WhatsApp officielle',
      cta_lead: 'Essai gratuit. Boîte, campagnes, automatisation et intégrations.',
      contact_title: 'Nous contacter',
      contact_form_title: 'Envoyer un message'
    }
  };

  // Helper to manage the googtrans cookie across root and domain
  function setGoogleTransCookie(val) {
    var host = window.location.hostname;
    var domainParts = host.split('.');
    var domains = ['', host];
    if (domainParts.length > 1) {
      domains.push('.' + host);
      domains.push('.' + domainParts.slice(-2).join('.'));
    }

    domains.forEach(function (d) {
      var dAttr = d ? '; domain=' + d : '';
      // Delete old cookie first
      document.cookie = 'googtrans=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/' + dAttr;
      document.cookie = 'googtrans=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=""' + dAttr;

      if (val) {
        var exp = new Date();
        exp.setTime(exp.getTime() + (365 * 24 * 60 * 60 * 1000));
        document.cookie = 'googtrans=' + val + '; expires=' + exp.toUTCString() + '; path=/' + dAttr;
      }
    });
  }

  // Instant UI translation for immediate responsiveness
  function instantTranslate(lang) {
    // 1. Dictionaries with data-i18n
    var dict = T[lang] || T.en;
    document.querySelectorAll('[data-i18n]').forEach(function (el) {
      var key = el.getAttribute('data-i18n');
      if (dict[key] != null) el.textContent = dict[key];
    });

    // 2. Common Navigation & CTA Texts
    var strings = UI_STRINGS[lang];
    if (strings) {
      var candidates = document.querySelectorAll('.nav-link, .nav-item, .mega-link-title, .header-login span, .header-cta-start, .btn-demo-open, .mobile-nav-link, .mnav-login, .mnav-start, .mnav-demo, .cw-hero-anim-heading');
      candidates.forEach(function (el) {
        var txt = el.textContent.trim();
        var orig = el.getAttribute('data-orig-text');
        if (!orig) {
          orig = txt;
          el.setAttribute('data-orig-text', orig);
        }
        if (strings[orig]) {
          if (el.children.length === 0) {
            el.textContent = strings[orig];
          } else {
            for (var i = 0; i < el.childNodes.length; i++) {
              var node = el.childNodes[i];
              if (node.nodeType === Node.TEXT_NODE && node.nodeValue.trim() === orig) {
                node.nodeValue = ' ' + strings[orig] + ' ';
                break;
              }
            }
          }
        }
      });
    } else if (lang === 'en') {
      document.querySelectorAll('[data-orig-text]').forEach(function (el) {
        var orig = el.getAttribute('data-orig-text');
        if (el.children.length === 0) {
          el.textContent = orig;
        } else {
          for (var i = 0; i < el.childNodes.length; i++) {
            var node = el.childNodes[i];
            if (node.nodeType === Node.TEXT_NODE) {
              node.nodeValue = ' ' + orig + ' ';
              break;
            }
          }
        }
      });
    }
  }

  // Trigger Google Translate engine
  function triggerGoogle(lang, isInitial) {
    if (lang === 'en') {
      setGoogleTransCookie('');
      try { localStorage.removeItem('hb_lang'); } catch (e) {}

      var isTranslated = document.documentElement.classList.contains('translated-ltr') ||
                         document.documentElement.classList.contains('translated-rtl') ||
                         document.querySelector('.goog-te-banner-frame');

      if (isTranslated && !isInitial) {
        var combo = document.querySelector('.goog-te-combo');
        if (combo) {
          combo.value = '';
          combo.dispatchEvent(new Event('change'));
          setTimeout(function () {
            if (document.documentElement.classList.contains('translated-ltr') || document.documentElement.classList.contains('translated-rtl')) {
              window.location.reload();
            }
          }, 300);
        } else {
          window.location.reload();
        }
      }
      return;
    }

    setGoogleTransCookie('/en/' + lang);

    function tryCombo() {
      var combo = document.querySelector('.goog-te-combo');
      if (combo) {
        if (combo.value !== lang) {
          combo.value = lang;
          combo.dispatchEvent(new Event('change'));
        }
        return true;
      }
      return false;
    }

    if (!tryCombo()) {
      var attempts = 0;
      var timer = setInterval(function () {
        attempts++;
        if (tryCombo()) {
          clearInterval(timer);
        } else if (attempts > 30) {
          clearInterval(timer);
          if (!isInitial) {
            window.location.reload();
          }
        }
      }, 100);
    }
  }

  // Main Apply Language Method
  function apply(lang, isInitial) {
    if (!LABELS[lang]) lang = 'en';

    // 1. Update HTML dir and lang
    document.documentElement.lang = lang;
    document.documentElement.dir = (lang === 'ar' ? 'rtl' : 'ltr');
    if (lang === 'ar') {
      document.body.classList.add('is-rtl');
    } else {
      document.body.classList.remove('is-rtl');
    }

    // 2. Update Header Button Label
    var label = document.getElementById('lang-switch-label');
    if (label) {
      label.textContent = LABELS[lang];
    }

    // 3. Update Dropdown Menu Active States
    document.querySelectorAll('#lang-switch-menu [data-lang]').forEach(function (el) {
      if (el.getAttribute('data-lang') === lang) {
        el.classList.add('active');
      } else {
        el.classList.remove('active');
      }
    });

    // 4. Update Mobile Menu Active States
    document.querySelectorAll('.mobile-lang-btn[data-lang]').forEach(function (el) {
      if (el.getAttribute('data-lang') === lang) {
        el.classList.add('active');
      } else {
        el.classList.remove('active');
      }
    });

    // 5. Save preference
    try {
      if (lang === 'en') {
        localStorage.removeItem('hb_lang');
      } else {
        localStorage.setItem('hb_lang', lang);
      }
    } catch (e) {}

    // 6. Update URL parameter cleanly without refresh
    try {
      var u = new URL(window.location.href);
      if (lang === 'en') {
        u.searchParams.delete('lang');
      } else {
        u.searchParams.set('lang', lang);
      }
      window.history.replaceState({}, '', u.toString());
    } catch (e2) {}

    // 7. Instant UI Translation (0ms fast feedback)
    instantTranslate(lang);

    // 8. Trigger Google Translate for full-page deep translation
    triggerGoogle(lang, isInitial);
  }

  // Initialize Language Switcher
  function init() {
    var btn = document.getElementById('lang-switch-btn');
    var menu = document.getElementById('lang-switch-menu');

    if (btn && menu) {
      function openMenu() {
        menu.hidden = false;
        btn.setAttribute('aria-expanded', 'true');
      }
      function closeMenu() {
        menu.hidden = true;
        btn.setAttribute('aria-expanded', 'false');
      }

      btn.addEventListener('click', function (e) {
        e.stopPropagation();
        menu.hidden ? openMenu() : closeMenu();
      });

      menu.querySelectorAll('[data-lang]').forEach(function (li) {
        li.addEventListener('click', function (e) {
          e.stopPropagation();
          var targetLang = li.getAttribute('data-lang');
          closeMenu();
          apply(targetLang, false);
        });
      });

      document.addEventListener('click', function (e) {
        if (!menu.hidden && !menu.contains(e.target) && e.target !== btn && !btn.contains(e.target)) {
          closeMenu();
        }
      });

      document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && !menu.hidden) {
          closeMenu();
        }
      });
    }

    // Mobile Language Buttons in Drawer
    document.querySelectorAll('.mobile-lang-btn[data-lang]').forEach(function (btnEl) {
      btnEl.addEventListener('click', function (e) {
        e.stopPropagation();
        var targetLang = btnEl.getAttribute('data-lang');
        apply(targetLang, false);
      });
    });

    // Detect initial language
    var startLang = 'en';
    try {
      var q = new URLSearchParams(window.location.search).get('lang');
      var saved = localStorage.getItem('hb_lang');
      var cMatch = document.cookie.match(/googtrans=\/en\/([a-z]{2})/i);
      var cLang = cMatch ? cMatch[1].toLowerCase() : null;

      if (q && LABELS[q]) {
        startLang = q;
      } else if (saved && LABELS[saved]) {
        startLang = saved;
      } else if (cLang && LABELS[cLang]) {
        startLang = cLang;
      }
    } catch (e) {}

    apply(startLang, true);
  }

  // Callback when Google Translate loads
  function onGoogleInit() {
    var savedLang = 'en';
    try {
      var q = new URLSearchParams(window.location.search).get('lang');
      savedLang = q || localStorage.getItem('hb_lang') || 'en';
    } catch (e) {}

    if (savedLang && savedLang !== 'en') {
      var combo = document.querySelector('.goog-te-combo');
      if (combo && combo.value !== savedLang) {
        combo.value = savedLang;
        combo.dispatchEvent(new Event('change'));
      }
    }
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }

  // Export to window
  window.InboxWaI18n = {
    apply: apply,
    dict: T,
    onGoogleInit: onGoogleInit
  };
})();
