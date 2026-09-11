<?php
/**
 * Industry-Specific Content Data for InboxWa Business Leads
 * Cloned and enhanced from the 14 reference URLs
 * 100% InboxWa branded with realistic WhatsApp conversation flows
 */

function getIndustryData($slug) {
    static $industries = null;
    if ($industries === null) {
        $industries = [

            // =========================================================================
            // 1. REAL ESTATE (Reference: aisensy.com/industries/real-estate)
            // =========================================================================
            'real-estate' => [
                'slug' => 'real-estate',
                'breadcrumb_label' => 'Real Estate',
                'title' => 'WhatsApp Business API for Real Estate | InboxWa',
                'meta_desc' => 'Showcase premium properties, automate site visit bookings, share virtual tour brochures, and close real estate deals faster with InboxWa WhatsApp Business API.',
                'kicker' => 'REAL ESTATE MESSAGING SUITE',
                'headline' => 'Showcase Properties &amp; Close Deals <br><span class="highlight-text">Faster on WhatsApp</span>',
                'lead' => 'Empower builders, developers, and real estate brokers with automated WhatsApp property brochures, virtual tour dispatch, site visit scheduling, and 24/7 AI lead qualification.',
                'chat_title' => 'InboxWa Real Estate AI',
                'chat_messages' => [
                    [
                        'type' => 'user',
                        'text' => 'Hi, I saw your luxury 3BHK project in Whitefield. Can you share the brochure?'
                    ],
                    [
                        'type' => 'bot',
                        'text' => "Hello Vikram! 🏡 Welcome to Palm Heights. Here is the official project brochure and pricing sheet:\n\n📄 Palm_Heights_3BHK_Brochure.pdf (4.2 MB)\n\nWould you like to schedule a site visit or view a 360° virtual tour?",
                        'buttons' => ['Book Site Visit', '360° Virtual Tour', 'Speak to Property Advisor']
                    ],
                    [
                        'type' => 'user',
                        'text' => 'Book Site Visit for this Saturday 11 AM'
                    ],
                    [
                        'type' => 'bot',
                        'text' => "✓ Confirmed! Site visit booked for Saturday at 11:00 AM. Our relationship manager Raghav will greet you at the Palm Heights Clubhouse. Location pin has been shared."
                    ]
                ],
                'floating_metric' => [
                    'value' => '4.2x Faster',
                    'label' => 'Site Visit Bookings'
                ],
                'stats' => [
                    ['number' => '98%', 'label' => 'Open Rate', 'sub' => 'Compared to 14% on email'],
                    ['number' => '3.8x', 'label' => 'Higher Conversion', 'sub' => 'From Click-to-WhatsApp Ads'],
                    ['number' => '< 45s', 'label' => 'First Response Time', 'sub' => '24/7 AI Lead Qualification'],
                    ['number' => '65%', 'label' => 'Cost Reduction', 'sub' => 'In property portal ad spends']
                ],
                'use_cases' => [
                    [
                        'tag' => 'Instant Lead Capture',
                        'title' => 'Automated Property Discovery & Brochure Sharing',
                        'description' => 'Send instant project brochures, floor plans, and pricing calculators the moment a buyer clicks on an ad or scans a site QR code.',
                        'points' => [
                            'Instant delivery of PDFs, video walkthroughs, and high-res floor plans.',
                            'No app download required; buyers engage natively on WhatsApp.',
                            'Seamless lead ingestion from 99acres, MagicBricks, Meta Ads, and website.'
                        ],
                        'chat_sample' => [
                            'bot' => "Hi Anita! 👋 Looking for 2 BHK or 3 BHK apartments in North Bangalore?",
                            'buttons' => ['2 BHK (₹75L - ₹95L)', '3 BHK (₹1.2Cr - ₹1.6Cr)', 'Luxury Penthouses'],
                            'user' => "3 BHK (₹1.2Cr - ₹1.6Cr)"
                        ]
                    ],
                    [
                        'tag' => 'Site Visit Scheduling',
                        'title' => 'Frictionless Site Visit Booking & Calendar Reminders',
                        'description' => 'Enable buyers to choose dates and time slots directly in WhatsApp, with automated Google/Outlook Calendar invites and GPS directions.',
                        'points' => [
                            'Automated slot picker with real-time agent availability.',
                            'Automated reminder notifications 24 hours and 2 hours before the visit.',
                            'Drop-off follow-up sequences for leads that reschedule.'
                        ],
                        'chat_sample' => [
                            'bot' => "Great! Select your preferred day for the Palm Meadows site tour:",
                            'buttons' => ['Saturday, 11:00 AM', 'Saturday, 3:00 PM', 'Sunday, 11:00 AM'],
                            'user' => "Saturday, 11:00 AM"
                        ]
                    ],
                    [
                        'tag' => 'Broadcast Campaigns',
                        'title' => 'Targeted Pre-Launch Offers & Price Increase Alerts',
                        'description' => 'Broadcast personalized pre-launch inventory, festive payment plans (e.g. 10:90 schemes), and construction milestone updates without number blocking.',
                        'points' => [
                            'Segment buyers by budget, preferred locality, and investment timeline.',
                            'Interactive CTA buttons driving instant callback requests.',
                            'Track real-time delivery, read receipts, and click-through analytics.'
                        ],
                        'chat_sample' => [
                            'bot' => "🎉 Exclusive Pre-Launch Alert: Phase 2 Palm Heights opens today! Avail ₹500/sq.ft inaugural discount for the first 25 bookings only.",
                            'buttons' => ['Claim Pre-Launch Offer', 'View Payment Plan'],
                            'user' => "Claim Pre-Launch Offer"
                        ]
                    ],
                    [
                        'tag' => 'CRM Integration',
                        'title' => 'Live Sync with Salesforce, LeadSquared & HubSpot',
                        'description' => 'Every conversation, buyer preference, and scheduled visit is logged in your real estate CRM in real time with auto-agent assignment.',
                        'points' => [
                            'Round-robin and territory-based lead distribution to sales executives.',
                            'Automated chat transcripts attached to buyer CRM contact records.',
                            'Trigger automated WhatsApp follow-ups when CRM pipeline stage changes.'
                        ],
                        'chat_sample' => [
                            'bot' => "Raghav Sharma from our Sales Team has been assigned to your inquiry. Connecting you now...",
                            'buttons' => ['Call Agent Raghav', 'Request Callback'],
                            'user' => "Call Agent Raghav"
                        ]
                    ]
                ],
                'journey_steps' => [
                    [
                        'title' => 'Lead Ingestion',
                        'desc' => 'Buyer clicks Facebook/Google Ad or scans site hoarding QR code, instantly opening an InboxWa WhatsApp conversation.',
                        'tag' => 'Step 01 · Omnichannel Capture'
                    ],
                    [
                        'title' => 'AI Lead Qualification',
                        'desc' => 'InboxWa AI bot asks budget, bedroom configuration, and buying timeline, automatically tagging high-intent buyers.',
                        'tag' => 'Step 02 · 24/7 AI Screening'
                    ],
                    [
                        'title' => 'Site Visit & Tour',
                        'desc' => 'Buyer selects time slot; bot shares GPS map location, executive contact card, and calendar invite with automated reminders.',
                        'tag' => 'Step 03 · Booking & Reminders'
                    ],
                    [
                        'title' => 'CRM Sync & Conversion',
                        'desc' => 'Lead state updates in CRM; executive conducts walkthrough; automated post-visit discount and booking token link sent.',
                        'tag' => 'Step 04 · Deal Closure'
                    ]
                ],
                'solutions' => [
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>',
                        'title' => 'Real Estate Specific CRM',
                        'desc' => 'Pre-built connectors for LeadSquared, Salesforce, Zoho, Sell.Do, and Farvision ERP.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><line x1="9" y1="3" x2="9" y2="21"/></svg>',
                        'title' => 'Virtual Catalog Browser',
                        'desc' => 'Let prospects browse multiple projects, towers, and unit layouts directly inside WhatsApp.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>',
                        'title' => 'RERA & Opt-in Compliant',
                        'desc' => 'Full compliance with RERA disclosures, consent management, and automated unsubscribe handlers.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>',
                        'title' => 'Automated Drip Follow-ups',
                        'desc' => 'Re-engage cold leads with price update alerts, loan EMI calculators, and construction photo updates.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>',
                        'title' => 'Multi-Broker Routing',
                        'desc' => 'Empower channel partners and internal sales teams with shared team inboxes and distinct attribution tags.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M8 14s1.5 2 4 2 4-2 4-2"/><line x1="9" y1="9" x2="9.01" y2="9"/><line x1="15" y1="9" x2="15.01" y2="9"/></svg>',
                        'title' => '24/7 Conversational AI',
                        'desc' => 'Intelligent bot answers questions on amenities, floor area, possession dates, and nearby schools.'
                    ]
                ],
                'faqs' => [
                    [
                        'q' => 'Can we send property brochures and floor plans via WhatsApp?',
                        'a' => 'Yes! You can automate the delivery of high-resolution PDF brochures, floor plan images, and 360-degree video links immediately upon receiving an inquiry.'
                    ],
                    [
                        'q' => 'Does InboxWa integrate with real estate CRMs like LeadSquared or Salesforce?',
                        'a' => 'Absolutely. We support two-way webhooks and native connectors with LeadSquared, Salesforce, Zoho, Sell.Do, and custom CRM platforms.'
                    ],
                    [
                        'q' => 'How does site visit scheduling work on WhatsApp?',
                        'a' => 'Buyers tap interactive WhatsApp buttons to select their preferred date and time. InboxWa checks executive availability, creates the appointment, sends Google Calendar invites, and dispatches GPS directions.'
                    ],
                    [
                        'q' => 'Can channel partners and brokers use the same WhatsApp Business number?',
                        'a' => 'Yes. With InboxWa’s Shared Team Inbox, dozens of sales managers and channel partner coordinators can handle chats from one verified WhatsApp number with role-based permissions.'
                    ],
                    [
                        'q' => 'How can we run Click-to-WhatsApp Facebook/Instagram ads for real estate?',
                        'a' => 'InboxWa connects directly to Meta Ads Manager. When buyers click your Instagram/Facebook ads, their conversation opens in WhatsApp pre-filled with the project name for immediate qualification.'
                    ]
                ],
                'cta_heading' => 'Ready to Multiply Real Estate Site Visits &amp; Closures?',
                'cta_desc' => 'Automate property inquiries, site visit bookings, and buyer follow-ups with InboxWa Official WhatsApp Business API.'
            ],

            // =========================================================================
            // 2. HEALTHCARE (Reference: aisensy.com/industries/healthcare)
            // =========================================================================
            'healthcare' => [
                'slug' => 'healthcare',
                'breadcrumb_label' => 'Healthcare',
                'title' => 'WhatsApp Business API for Healthcare & Clinics | InboxWa',
                'meta_desc' => 'Schedule doctor appointments, send diagnostic lab reports, deliver medication reminders, and enhance patient care with HIPAA-compliant WhatsApp automation from InboxWa.',
                'kicker' => 'HEALTHCARE MESSAGING SUITE',
                'headline' => 'Elevate Patient Care &amp; Bookings <br><span class="highlight-text">with WhatsApp API</span>',
                'lead' => 'Empower hospitals, diagnostic clinics, and wellness providers with instant doctor appointment scheduling, secure lab report delivery, automated prescription reminders, and 24/7 patient support.',
                'chat_title' => 'InboxWa Health Assistant',
                'chat_messages' => [
                    [
                        'type' => 'user',
                        'text' => 'Hi, I want to book an appointment with Dr. Priya (Cardiologist) for tomorrow.'
                    ],
                    [
                        'type' => 'bot',
                        'text' => "Hello Rohan! 🩺 Dr. Priya Sharma is available tomorrow at City Heart Clinic. Please select an available slot:",
                        'buttons' => ['10:30 AM', '02:15 PM', '05:00 PM']
                    ],
                    [
                        'type' => 'user',
                        'text' => '10:30 AM'
                    ],
                    [
                        'type' => 'bot',
                        'text' => "✓ Appointment confirmed for tomorrow at 10:30 AM.\n\n📍 City Heart Care, 2nd Floor, Indiranagar\nToken Number: #24\n\nPlease arrive 10 minutes prior for vitals check."
                    ]
                ],
                'floating_metric' => [
                    'value' => '82% Reduction',
                    'label' => 'In Clinic No-Shows'
                ],
                'stats' => [
                    ['number' => '82%', 'label' => 'Fewer No-Shows', 'sub' => 'Via automated slot confirmations'],
                    ['number' => '3.2s', 'label' => 'Report Delivery', 'sub' => 'Secure PDF sent directly to patient'],
                    ['number' => '24/7', 'label' => 'Patient Triage', 'sub' => 'Instant answers to basic medical FAQs'],
                    ['number' => '100%', 'label' => 'HIPAA & GDPR Compliant', 'sub' => 'End-to-end patient privacy']
                ],
                'use_cases' => [
                    [
                        'tag' => 'Doctor Scheduling',
                        'title' => 'Instant OPD & Specialist Appointment Booking',
                        'description' => 'Eliminate endless telephone waiting queues. Let patients search doctors by specialty, view open consultation slots, and book within 30 seconds.',
                        'points' => [
                            'Interactive date and time slot selector directly inside chat.',
                            'Instant digital appointment token with doctor room and clinic map.',
                            'Automated cancellation and rescheduling buttons to free up doctor slots.'
                        ],
                        'chat_sample' => [
                            'bot' => "Which department are you looking for consultation today?",
                            'buttons' => ['Cardiology', 'Dermatology', 'General Medicine', 'Pediatrics'],
                            'user' => "Dermatology"
                        ]
                    ],
                    [
                        'tag' => 'Diagnostics Delivery',
                        'title' => 'Secure Lab & Radiology Report Dispatch',
                        'description' => 'Automatically notify patients and deliver blood test, MRI, and X-ray PDF reports via password-protected WhatsApp messages the moment results are verified.',
                        'points' => [
                            'Direct integration with Hospital Information Systems (HIS) and LIS.',
                            'Zero manual report printing or physical collection queues.',
                            'End-to-end 256-bit encryption protecting patient diagnostic data.'
                        ],
                        'chat_sample' => [
                            'bot' => "Hello Sunita, your Complete Blood Count (CBC) test results are ready.\n\n📄 CBC_Report_Sunita_Rao.pdf (Password: Your DOB DDMM)",
                            'buttons' => ['Download Report', 'Consult Doctor on Call'],
                            'user' => "Consult Doctor on Call"
                        ]
                    ],
                    [
                        'tag' => 'Patient Adherence',
                        'title' => 'Medication Reminders & Post-Op Follow-Ups',
                        'description' => 'Send automated medicine refill prompts, pre-procedure fasting guidelines, and post-surgery check-in surveys to ensure high treatment compliance.',
                        'points' => [
                            'Automated daily prescription alerts with medication dosage.',
                            'Post-discharge check-in questionnaires to track patient recovery.',
                            'Emergency escalation alerts for critical patient symptoms.'
                        ],
                        'chat_sample' => [
                            'bot' => "Good morning Mr. Patel! Friendly reminder to take your prescribed BP medication (Amlodipine 5mg) after breakfast.",
                            'buttons' => ['Taken ✓', 'Remind in 1 Hour'],
                            'user' => "Taken ✓"
                        ]
                    ],
                    [
                        'tag' => 'Preventive Health',
                        'title' => 'Annual Health Checkup & Vaccination Campaigns',
                        'description' => 'Broadcast seasonal wellness checkup packages, flu vaccination reminders, and senior citizen wellness camps to your patient directory.',
                        'points' => [
                            'Segment patients by age, past visit history, and chronic conditions.',
                            'One-tap booking for home blood sample collection.',
                            'Sub-second delivery with Meta green badge verification.'
                        ],
                        'chat_sample' => [
                            'bot' => "Seasonal Health Alert: Comprehensive Full Body Checkup (72 tests) at 50% discount this month. Would you like to book home collection?",
                            'buttons' => ['Book Home Sample Collection', 'View Included Tests'],
                            'user' => "Book Home Sample Collection"
                        ]
                    ]
                ],
                'journey_steps' => [
                    [
                        'title' => 'Patient Inquiry',
                        'desc' => 'Patient clicks Google listing, website button, or scans prescription QR code to message hospital WhatsApp.',
                        'tag' => 'Step 01 · Patient Ingestion'
                    ],
                    [
                        'title' => 'Doctor Slot Selection',
                        'desc' => 'Patient chooses department, doctor, and time slot. System checks HMS/EMR database in real time.',
                        'tag' => 'Step 02 · Real-Time Scheduling'
                    ],
                    [
                        'title' => 'Token & Reminders',
                        'desc' => 'Digital appointment pass sent with Google Maps pin. Automated reminders sent at 24h and 2h marks.',
                        'tag' => 'Step 03 · Automated Adherence'
                    ],
                    [
                        'title' => 'Report & Follow-Up',
                        'desc' => 'Lab reports delivered as encrypted PDFs; follow-up review slot suggested; feedback collected automatically.',
                        'tag' => 'Step 04 · Post-Care Engagement'
                    ]
                ],
                'solutions' => [
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>',
                        'title' => 'HIS & EMR Integration',
                        'desc' => 'Connect seamlessly with Practo, KareXpert, Napier, Cerner, and custom hospital databases.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>',
                        'title' => 'Patient Data Privacy',
                        'desc' => 'Compliant with HIPAA, GDPR, and Indian Digital Personal Data Protection (DPDP) Act.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>',
                        'title' => 'Multi-Doctor Schedules',
                        'desc' => 'Manage rosters and consultation timings for 100+ doctors across multiple hospital branches.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>',
                        'title' => 'Automated Report Bot',
                        'desc' => 'Patients retrieve historical prescriptions and lab results on demand using their registered mobile number.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>',
                        'title' => 'Emergency Triage Rules',
                        'desc' => 'Instantly detect emergency keywords (e.g. chest pain, breathing difficulty) and route immediately to casualty line.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>',
                        'title' => 'Multi-Language Support',
                        'desc' => 'Engage patients in English, Hindi, Tamil, Telugu, Kannada, Bengali, and 10+ regional Indian languages.'
                    ]
                ],
                'faqs' => [
                    [
                        'q' => 'Is patient medical data safe on WhatsApp via InboxWa?',
                        'a' => 'Yes. All communications are protected by WhatsApp’s native end-to-end encryption. InboxWa adheres strictly to HIPAA, GDPR, and DPDP guidelines with role-based access controls.'
                    ],
                    [
                        'q' => 'How are diagnostic reports sent to patients securely?',
                        'a' => 'Reports are uploaded via secure webhook from your Laboratory Information System (LIS) and delivered as password-protected PDFs (using the patient’s year of birth or PIN).'
                    ],
                    [
                        'q' => 'Can patients reschedule or cancel appointments on WhatsApp?',
                        'a' => 'Yes. Patients can simply tap "Reschedule" or "Cancel" buttons. The clinic calendar updates in real time, freeing up the doctor slot for other waiting patients.'
                    ],
                    [
                        'q' => 'Can we collect upfront consultation fees on WhatsApp?',
                        'a' => 'Yes. InboxWa integrates with Razorpay, Cashfree, and UPI gateways to send secure payment links with instant receipt generation.'
                    ],
                    [
                        'q' => 'How does the triage bot handle medical emergencies?',
                        'a' => 'You can configure automated keyword triggers. If a patient mentions critical words (e.g. cardiac arrest, trauma), the system immediately shares emergency numbers and directs them to the nearest ER.'
                    ]
                ],
                'cta_heading' => 'Transform Your Hospital &amp; Clinic Experience Today',
                'cta_desc' => 'Cut clinic no-shows by 80%, automate lab report dispatch, and deliver world-class patient satisfaction with InboxWa.'
            ],

            // =========================================================================
            // 3. TRAVEL & HOSPITALITY (Reference: aisensy.com/industries/travel-and-tourism)
            // =========================================================================
            'travel-hospitality' => [
                'slug' => 'travel-hospitality',
                'breadcrumb_label' => 'Travel & Hospitality',
                'title' => 'WhatsApp Business API for Travel & Hospitality | InboxWa',
                'meta_desc' => 'Automate flight & hotel booking confirmations, share digital itineraries, enable contactless guest check-ins, and boost tour package sales on WhatsApp with InboxWa.',
                'kicker' => 'TRAVEL & HOSPITALITY MESSAGING',
                'headline' => 'Elevate Guest Experiences &amp; Bookings <br><span class="highlight-text">with WhatsApp API</span>',
                'lead' => 'Empower travel agencies, hotel chains, resorts, and tour operators with instant booking confirmations, interactive day-wise itineraries, contactless check-in, and 24/7 concierge assistance.',
                'chat_title' => 'InboxWa Travel Concierge',
                'chat_messages' => [
                    [
                        'type' => 'user',
                        'text' => 'Hi, looking for a 5-day Bali vacation package for 2 adults in November.'
                    ],
                    [
                        'type' => 'bot',
                        'text' => "Hello Alok! 🌴 Exciting choice. Here are our top-rated 5D/4N Bali packages with flights & luxury resort stay:\n\n✨ 1. Bali Bliss: Ubud & Seminyak (₹48,999/person)\n✨ 2. Tropical Escape: Kuta & Nusa Penida (₹39,999/person)\n\nWhich package would you like to explore?",
                        'buttons' => ['View Ubud Package PDF', 'View Nusa Penida PDF', 'Talk to Travel Expert']
                    ],
                    [
                        'type' => 'user',
                        'text' => 'View Ubud Package PDF'
                    ],
                    [
                        'type' => 'bot',
                        'text' => "📄 Bali_Bliss_Ubud_5D4N.pdf (3.1 MB) sent!\n\nIncludes 4-star resort, daily breakfast, private airport transfers, and Nusa Penida speedboat tour. Would you like to lock in the early bird fare?"
                    ]
                ],
                'floating_metric' => [
                    'value' => '3.4x Higher',
                    'label' => 'Tour Package Inquiries'
                ],
                'stats' => [
                    ['number' => '3.4x', 'label' => 'More Inquiries', 'sub' => 'Compared to slow email itineraries'],
                    ['number' => '92%', 'label' => 'Guest Satisfaction', 'sub' => 'Via instant 24/7 WhatsApp concierge'],
                    ['number' => '< 1 min', 'label' => 'Contactless Check-in', 'sub' => 'Pre-arrival guest registration'],
                    ['number' => '45%', 'label' => 'Repeat Bookings', 'sub' => 'Through seasonal loyalty broadcasts']
                ],
                'use_cases' => [
                    [
                        'tag' => 'Instant Itineraries',
                        'title' => 'Day-wise Itinerary Delivery & Customization',
                        'description' => 'Send beautiful PDF travel itineraries, hotel vouchers, and flight tickets directly to WhatsApp seconds after a traveler requests quotes.',
                        'points' => [
                            'Share rich PDFs with hotel photos, sightseeing routes, and inclusions.',
                            'Interactive buttons for travelers to modify hotel category or add flight upgrades.',
                            'Zero spam folder drop-offs; 98% open rates guaranteed.'
                        ],
                        'chat_sample' => [
                            'bot' => "Here is your customized Switzerland & Paris 7-Day Itinerary 🏔️🇫🇷",
                            'buttons' => ['Download Full Itinerary', 'Customize Hotels', 'Book Early Bird Rate'],
                            'user' => "Book Early Bird Rate"
                        ]
                    ],
                    [
                        'tag' => 'Contactless Hospitality',
                        'title' => 'Pre-Arrival Check-In & Room Key Concierge',
                        'description' => 'Allow hotel guests to upload ID proofs, sign registration cards, and receive digital room keycards and Wi-Fi credentials prior to reaching the front desk.',
                        'points' => [
                            'Bypass long front desk reception check-in queues.',
                            'Automated pre-arrival welcome message with hotel location and directions.',
                            'Prompt guests for room preferences (high floor, extra pillows, early check-in).'
                        ],
                        'chat_sample' => [
                            'bot' => "Welcome to Grand Hyatt Goa! 🌊 Click below to complete fast check-in and receive your digital room pass:",
                            'buttons' => ['Complete Fast Check-In', 'Request Airport Cab'],
                            'user' => "Complete Fast Check-In"
                        ]
                    ],
                    [
                        'tag' => 'In-Stay Concierge',
                        'title' => '24/7 Guest Service, Room Service & Spa Booking',
                        'description' => 'Enable guests to order food, book spa appointments, request housekeeping, and ask for local sightseeing recommendations via simple chat.',
                        'points' => [
                            'Interactive room service menu with instant cart checkout.',
                            'Automated dispatch to housekeeping and front desk teams.',
                            'Real-time status updates on food delivery and cab arrivals.'
                        ],
                        'chat_sample' => [
                            'bot' => "How can we assist your stay at Room 402 today?",
                            'buttons' => ['Order Dining', 'Book Ayurveda Spa', 'Housekeeping Request'],
                            'user' => "Book Ayurveda Spa"
                        ]
                    ],
                    [
                        'tag' => 'Post-Trip Loyalty',
                        'title' => 'Automated TripAdvisor Reviews & Holiday Offers',
                        'description' => 'Send automated review requests right after checkout and nurture past guests with personalized discounts on long weekends and festive seasons.',
                        'points' => [
                            'Boost TripAdvisor and Google Maps 5-star review ratings.',
                            'Segment travelers by past destinations (adventure, luxury, family).',
                            'Broadcast holiday packages with dynamic pricing tokens.'
                        ],
                        'chat_sample' => [
                            'bot' => "Hope you had a memorable stay with us! Would you take 30 seconds to rate your experience?",
                            'buttons' => ['⭐⭐⭐⭐⭐ Excellent', 'Leave Feedback'],
                            'user' => "⭐⭐⭐⭐⭐ Excellent"
                        ]
                    ]
                ],
                'journey_steps' => [
                    [
                        'title' => 'Travel Discovery',
                        'desc' => 'Traveler sees vacation reel or ad on Instagram/Google and initiates chat with pre-selected holiday package inquiry.',
                        'tag' => 'Step 01 · Inquiry Capture'
                    ],
                    [
                        'title' => 'Itinerary Customization',
                        'desc' => 'InboxWa AI bot shares PDF itinerary, hotel ratings, and pricing options. Traveler selects flight and hotel class.',
                        'tag' => 'Step 02 · Interactive Customization'
                    ],
                    [
                        'title' => 'Payment & Vouchers',
                        'desc' => 'Secure deposit payment link sent; flight tickets, hotel confirmation vouchers, and visa instructions dispatched immediately.',
                        'tag' => 'Step 03 · Instant Booking'
                    ],
                    [
                        'title' => 'In-Trip Concierge',
                        'desc' => 'Driver contact details, weather alerts, web check-in reminders, and 24/7 live assistance active throughout the journey.',
                        'tag' => 'Step 04 · 24/7 Guest Support'
                    ]
                ],
                'solutions' => [
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>',
                        'title' => 'PMS & Channel Manager Sync',
                        'desc' => 'Integrates with Opera, Cloudbeds, Amadeus, Sabre, and custom travel ERPs.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>',
                        'title' => 'Flight & Gate Alerts',
                        'desc' => 'Keep travelers informed with real-time gate changes, boarding countdowns, and baggage belt updates.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>',
                        'title' => 'Dynamic Currency Quotes',
                        'desc' => 'Provide real-time pricing in USD, EUR, INR, AED, and multi-currency formats with automated forex calculation.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/><path d="M2 12h20"/></svg>',
                        'title' => 'Multilingual Travel Guides',
                        'desc' => 'Deliver destination travel guides and tips in English, Spanish, French, Arabic, and Hindi.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>',
                        'title' => 'Group Travel Coordination',
                        'desc' => 'Manage group tour broadcasts, meeting point pins, and itinerary changes across all tour participants.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>',
                        'title' => 'Emergency Travel Support',
                        'desc' => 'SOS keyword handler routes urgent medical, passport loss, or flight cancellation queries to on-call agents.'
                    ]
                ],
                'faqs' => [
                    [
                        'q' => 'Can we send automated flight status and gate change alerts?',
                        'a' => 'Yes. By connecting your GDS or flight tracking API to InboxWa webhooks, you can send automated flight delay alerts, gate updates, and boarding reminders.'
                    ],
                    [
                        'q' => 'How does contactless check-in work for hotels?',
                        'a' => 'Guests receive a WhatsApp message 24 hours prior to arrival. They upload their ID proof, sign the digital registration card, and receive their digital room key and Wi-Fi password.'
                    ],
                    [
                        'q' => 'Can travelers book room service and spa treatments through WhatsApp?',
                        'a' => 'Yes. You can showcase a rich interactive WhatsApp catalog with dishes and treatment packages. Guests select items and the order routes directly to the kitchen or spa desk.'
                    ],
                    [
                        'q' => 'Can we send bulk holiday offers without getting our number banned?',
                        'a' => 'Yes! InboxWa provides the official Meta WhatsApp Business API with pre-approved marketing templates, high throughput, and zero risk of consumer number blocking.'
                    ],
                    [
                        'q' => 'Does InboxWa support multiple agent inboxes for travel desk teams?',
                        'a' => 'Yes. Multiple travel consultants and concierge staff can manage chats concurrently with conversation assignment, internal tags, and performance reports.'
                    ]
                ],
                'cta_heading' => 'Scale Your Travel &amp; Hospitality Business Today',
                'cta_desc' => 'Boost direct bookings, deliver 5-star guest service, and automate inquiries 24/7 with InboxWa Official WhatsApp API.'
            ],

            // =========================================================================
            // 4. BEAUTY & WELLNESS (Reference: m.aisensy.com/blog/whatsapp-for-spa-and-salons/)
            // =========================================================================
            'beauty-wellness' => [
                'slug' => 'beauty-wellness',
                'breadcrumb_label' => 'Beauty & Wellness',
                'title' => 'WhatsApp Business API for Salons, Spas & Wellness | InboxWa',
                'meta_desc' => 'Automate salon & spa appointment bookings, share digital service menus, send automated slot reminders, and boost repeat visits with InboxWa WhatsApp API.',
                'kicker' => 'SALON & SPA AUTOMATION ENGINE',
                'headline' => 'Fill Appointment Books &amp; Delight Clients <br><span class="highlight-text">on WhatsApp</span>',
                'lead' => 'Empower hair salons, luxury spas, skincare clinics, and wellness centers with automated appointment scheduling, digital service menus, slot reminder notifications, and targeted festive promotions.',
                'chat_title' => 'InboxWa Beauty Bot',
                'chat_messages' => [
                    [
                        'type' => 'user',
                        'text' => 'Hi, I want to book a Hair Spa and Manicure for tomorrow afternoon.'
                    ],
                    [
                        'type' => 'bot',
                        'text' => "Hello Meera! ✨ We’d love to pamper you. Here are the available slots with Senior Stylist Neha tomorrow:",
                        'buttons' => ['02:00 PM', '04:30 PM', '06:00 PM']
                    ],
                    [
                        'type' => 'user',
                        'text' => '04:30 PM'
                    ],
                    [
                        'type' => 'bot',
                        'text' => "✓ Perfect! Your appointment is confirmed for tomorrow at 04:30 PM with Neha.\n\n💇‍♀️ Keratin Hair Spa + Deluxe Gel Manicure\n📍 Aura Spa & Salon, Koramangala\n\nSee you tomorrow! Tap below if you need to reschedule."
                    ]
                ],
                'floating_metric' => [
                    'value' => '78% Fewer',
                    'label' => 'No-Shows & Cancellations'
                ],
                'stats' => [
                    ['number' => '78%', 'label' => 'Fewer No-Shows', 'sub' => 'Via automated 2-hour slot reminders'],
                    ['number' => '4.1x', 'label' => 'Repeat Bookings', 'sub' => 'With 30-day service refill alerts'],
                    ['number' => '95%', 'label' => 'Open Rate', 'sub' => 'On weekend & festive pampering offers'],
                    ['number' => '< 30s', 'label' => 'Self-Booking Time', 'sub' => 'Directly inside WhatsApp']
                ],
                'use_cases' => [
                    [
                        'tag' => 'Appointment Scheduling',
                        'title' => '24/7 Self-Service Appointment Booking & Reminders',
                        'description' => 'Let clients book haircuts, facials, massages, and nail art appointments even while your salon is closed at night.',
                        'points' => [
                            'Clients choose service, preferred stylist, and convenient time slot.',
                            'Automated reminder message sent 24 hours and 2 hours before the visit.',
                            'Instant "Reschedule" or "Confirm" buttons prevent empty salon chairs.'
                        ],
                        'chat_sample' => [
                            'bot' => "Choose your pampering treatment for this weekend:",
                            'buttons' => ['Hair Styling & Color', 'Aromatherapy Massage', 'Skin Brightening Facial'],
                            'user' => "Hair Styling & Color"
                        ]
                    ],
                    [
                        'tag' => 'Digital Menu Catalog',
                        'title' => 'WhatsApp Service Catalogs & Price Lists',
                        'description' => 'Showcase your complete salon and spa treatment menu with high-resolution imagery, treatment benefits, duration, and pricing.',
                        'points' => [
                            'Rich interactive product cards and service packages.',
                            'Clients can add multiple treatments to cart and book in one go.',
                            'Easily update seasonal packages and festival pricing.'
                        ],
                        'chat_sample' => [
                            'bot' => "✨ Discover our festive Glow Package: HydraFacial + Hair Botox + Pedicure at just ₹3,499 (Original ₹5,500).",
                            'buttons' => ['Book Glow Package', 'View Complete Menu'],
                            'user' => "Book Glow Package"
                        ]
                    ],
                    [
                        'tag' => 'Retention Automation',
                        'title' => 'Automated Haircut & Facial Refill Prompts',
                        'description' => 'Automatically trigger personalized reminders when it’s time for a client’s regular grooming session (e.g. 25 days after a haircut or 30 days after a facial).',
                        'points' => [
                            'Predictive repeat booking reminders based on past visit dates.',
                            'Celebrate client birthdays and anniversaries with special discount codes.',
                            'Reactivate dormant clients with exclusive "We Miss You" vouchers.'
                        ],
                        'chat_sample' => [
                            'bot' => "Hi Rajesh! It’s been 4 weeks since your last haircut with Stylist Imran. Would you like to reserve your favorite slot for this Saturday?",
                            'buttons' => ['Book with Imran (Saturday)', 'Choose Another Time'],
                            'user' => "Book with Imran (Saturday)"
                        ]
                    ],
                    [
                        'tag' => 'Post-Service Feedback',
                        'title' => 'Automated 5-Star Google Review Generation',
                        'description' => 'Collect client feedback 1 hour after their treatment. Route happy clients directly to your Google My Business profile for rave reviews.',
                        'points' => [
                            'Dramatically increase 5-star salon reviews on Google and Justdial.',
                            'Privately catch and resolve complaints before they end up online.',
                            'Reward clients with loyalty points for leaving photo reviews.'
                        ],
                        'chat_sample' => [
                            'bot' => "How was your Swedish Massage with Therapist Tanya today?",
                            'buttons' => ['⭐⭐⭐⭐⭐ Loved it!', '⭐⭐⭐ Average', 'Need Assistance'],
                            'user' => "⭐⭐⭐⭐⭐ Loved it!"
                        ]
                    ]
                ],
                'journey_steps' => [
                    [
                        'title' => 'Client Engagement',
                        'desc' => 'Client taps Instagram "Book on WhatsApp" button or scans QR code on salon mirror to view service menu.',
                        'tag' => 'Step 01 · Ingestion'
                    ],
                    [
                        'title' => 'Stylist & Time Selection',
                        'desc' => 'Bot presents treatment options, senior stylists, and open slot calendar. Instant appointment confirmation issued.',
                        'tag' => 'Step 02 · Self-Booking'
                    ],
                    [
                        'title' => 'Visit Reminders',
                        'desc' => 'Automated WhatsApp reminder sent 2 hours before the slot with one-tap confirmation button.',
                        'tag' => 'Step 03 · Zero No-Shows'
                    ],
                    [
                        'title' => 'Review & Loyalty Nurture',
                        'desc' => 'Post-visit feedback request routed to Google Review; automatic 30-day refill reminder scheduled in calendar.',
                        'tag' => 'Step 04 · Lifetime Retention'
                    ]
                ],
                'solutions' => [
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>',
                        'title' => 'Salon Software Sync',
                        'desc' => 'Integrates with Zenoti, Fresha, MioSalon, Shedul, and custom POS billing systems.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>',
                        'title' => 'Stylist Roster Calendar',
                        'desc' => 'Manage chair availability and stylist shifts across multiple salon branches simultaneously.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>',
                        'title' => 'Membership & Loyalty Pass',
                        'desc' => 'Send digital membership cards, wallet balances, and package session counters directly on WhatsApp.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>',
                        'title' => 'UPI Deposit Payments',
                        'desc' => 'Collect non-refundable token deposits for high-ticket services (e.g. bridal makeup, hair rebonding).'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>',
                        'title' => 'Broadcast Festival Promos',
                        'desc' => 'Send high-impact Diwali, Valentine’s, and New Year pampering offers to thousands of past clients.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M8 14s1.5 2 4 2 4-2 4-2"/></svg>',
                        'title' => 'Before/After Showcase',
                        'desc' => 'Share before/after transformation reels and client testimonial photos natively in chat.'
                    ]
                ],
                'faqs' => [
                    [
                        'q' => 'Can clients book appointments when the salon is closed?',
                        'a' => 'Yes! The InboxWa AI booking bot operates 24/7. Clients can check stylist availability and reserve slots at midnight without waiting for morning receptionist hours.'
                    ],
                    [
                        'q' => 'How does the reminder system reduce salon no-shows?',
                        'a' => 'InboxWa automatically dispatches WhatsApp reminders 24 hours and 2 hours before the appointment with "Confirm" and "Reschedule" buttons, cutting no-shows by up to 78%.'
                    ],
                    [
                        'q' => 'Can we collect advance deposits for bridal packages?',
                        'a' => 'Yes. InboxWa allows you to send automated UPI/card payment links to secure booking advances before reserving bridal makeup artists.'
                    ],
                    [
                        'q' => 'Does it integrate with salon POS systems like Zenoti or Fresha?',
                        'a' => 'Yes, we provide REST API webhooks and integrations with Zenoti, Fresha, MioSalon, and custom billing software.'
                    ],
                    [
                        'q' => 'Can we send automated reminders when a client is due for a haircut?',
                        'a' => 'Yes! You can set automated 25-day or 30-day post-visit re-engagement triggers that invite clients back with one-tap booking.'
                    ]
                ],
                'cta_heading' => 'Keep Every Salon Chair Filled with InboxWa',
                'cta_desc' => 'Automate appointment bookings, cut no-shows to near zero, and drive repeat visits on WhatsApp.'
            ],

            // =========================================================================
            // 5. E-COMMERCE (Reference: aisensy.com/industries/ecommerce)
            // =========================================================================
            'ecommerce' => [
                'slug' => 'ecommerce',
                'breadcrumb_label' => 'E-Commerce',
                'title' => 'WhatsApp Business API for E-Commerce & D2C | InboxWa',
                'meta_desc' => 'Recover up to 45% abandoned carts, verify COD orders, automate shipping tracking, and broadcast personalized product offers with InboxWa E-Commerce WhatsApp API.',
                'kicker' => 'E-COMMERCE & D2C GROWTH ENGINE',
                'headline' => 'Recover Abandoned Carts &amp; Skyrocket Sales <br><span class="highlight-text">on WhatsApp</span>',
                'lead' => 'Empower D2C brands, Shopify stores, and WooCommerce merchants with automated abandoned cart recovery, instant COD confirmation, live parcel tracking alerts, and personalized broadcast campaigns.',
                'chat_title' => 'InboxWa Ecom Bot',
                'chat_messages' => [
                    [
                        'type' => 'bot',
                        'text' => "Hey Sneha! 👋 We noticed you left the Wireless Noise-Cancelling Headphones in your cart.\n\n🎁 Complete your order in the next 30 minutes and enjoy an extra 10% OFF with code: CART10",
                        'buttons' => ['Checkout with 10% OFF', 'Chat with Product Support']
                    ],
                    [
                        'type' => 'user',
                        'text' => 'Checkout with 10% OFF'
                    ],
                    [
                        'type' => 'bot',
                        'text' => "🎉 Awesome! Your discounted cart is ready:\nTotal: ₹3,149 (Saved ₹350)\n\nTap below to complete instant UPI / Card payment:"
                    ]
                ],
                'floating_metric' => [
                    'value' => '45% Cart',
                    'label' => 'Recovery Rate'
                ],
                'stats' => [
                    ['number' => '45%', 'label' => 'Cart Recovery', 'sub' => 'Via automated 3-step WhatsApp reminders'],
                    ['number' => '98%', 'label' => 'Delivery Rate', 'sub' => 'With sub-second delivery latency'],
                    ['number' => '60%', 'label' => 'Lower RTO Rates', 'sub' => 'Via automated Cash on Delivery verification'],
                    ['number' => '5.2x', 'label' => 'Campaign ROI', 'sub' => 'Compared to standard SMS & email']
                ],
                'use_cases' => [
                    [
                        'tag' => 'Cart Recovery',
                        'title' => 'Automated Multi-Stage Abandoned Cart Recovery',
                        'description' => 'Trigger smart, sequenced WhatsApp reminders at 15 minutes, 6 hours, and 24 hours with dynamic product images, checkout links, and exclusive discount codes.',
                        'points' => [
                            'Recovers 3x to 5x more abandoned checkouts than email.',
                            'Dynamic cart image preview and one-tap checkout link.',
                            'Automatically stops sequence once the buyer completes purchase.'
                        ],
                        'chat_sample' => [
                            'bot' => "Hi Kabir! Your Urban Streetwear Hoodie is waiting. Stock is running low!",
                            'buttons' => ['Complete Order Now', 'Apply 15% Discount Code'],
                            'user' => "Apply 15% Discount Code"
                        ]
                    ],
                    [
                        'tag' => 'RTO Reduction',
                        'title' => 'Automated Cash on Delivery (COD) Verification & Pre-Paid Conversion',
                        'description' => 'Drastically reduce Return-to-Origin (RTO) rates by validating customer addresses and offering instant 5% cashback if they convert COD to online UPI payment.',
                        'points' => [
                            'Automated "Confirm Order" / "Cancel Order" buttons on purchase.',
                            'Convert COD buyers to UPI pre-paid with automated cash incentives.',
                            'Prompt for address landmarks to ensure successful courier delivery.'
                        ],
                        'chat_sample' => [
                            'bot' => "Order #8492 placed! Tap below to confirm your Cash on Delivery order, or pay now via UPI to get ₹100 instant cashback:",
                            'buttons' => ['Pay via UPI (Save ₹100)', 'Confirm COD Order', 'Cancel Order'],
                            'user' => "Pay via UPI (Save ₹100)"
                        ]
                    ],
                    [
                        'tag' => 'Logistics Automation',
                        'title' => 'Real-Time Shipping & Live Delivery Tracking Alerts',
                        'description' => 'Send automatic notifications when an order is dispatched, out for delivery, or successfully handed over, eliminating "Where is my order?" (WISMO) tickets.',
                        'points' => [
                            'Integrates directly with Shiprocket, Delhivery, Bluedart, and ClickPost.',
                            'Live courier tracking link and delivery OTP inside WhatsApp.',
                            'Reduces customer support inquiry tickets by up to 60%.'
                        ],
                        'chat_sample' => [
                            'bot' => "🚚 Out for Delivery! Your package from StyleLounge is arriving today with delivery associate Amit (Phone: +91 98765 00000).",
                            'buttons' => ['Track Courier Live', 'Reschedule Delivery'],
                            'user' => "Track Courier Live"
                        ]
                    ],
                    [
                        'tag' => 'Native Catalog Commerce',
                        'title' => 'WhatsApp Product Catalogs & 1-Tap Checkout',
                        'description' => 'Let customers discover bestsellers, select color/size variants, and place orders directly inside WhatsApp without ever leaving the app.',
                        'points' => [
                            'Synced real-time with your Shopify / WooCommerce inventory.',
                            'Native WhatsApp shopping cart and in-chat UPI checkout.',
                            'Upsell and cross-sell complementary accessories automatically.'
                        ],
                        'chat_sample' => [
                            'bot' => "Check out our Trending Summer Collection 👗 Browse 40+ new arrivals directly in our catalog:",
                            'buttons' => ['View WhatsApp Catalog', 'Chat with Stylist'],
                            'user' => "View WhatsApp Catalog"
                        ]
                    ]
                ],
                'journey_steps' => [
                    [
                        'title' => 'Cart Abandonment',
                        'desc' => 'Shopper leaves store with items in cart. InboxWa detects checkout abandonment via Shopify webhook.',
                        'tag' => 'Step 01 · Trigger Event'
                    ],
                    [
                        'title' => 'Smart WhatsApp Reminder',
                        'desc' => 'Personalized message sent with product photo, cart items, and limited-time discount voucher.',
                        'tag' => 'Step 02 · Dynamic Nurture'
                    ],
                    [
                        'title' => 'Instant Checkout & COD Sync',
                        'desc' => 'Shopper completes order; bot confirms shipping address and converts COD to prepaid via UPI.',
                        'tag' => 'Step 03 · Conversion & Validation'
                    ],
                    [
                        'title' => 'Dispatch & Re-Order',
                        'desc' => 'Live tracking dispatched; post-delivery review collected; automated cross-sell sent in 14 days.',
                        'tag' => 'Step 04 · Post-Purchase LTV'
                    ]
                ],
                'solutions' => [
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>',
                        'title' => '1-Click Shopify & Woo Sync',
                        'desc' => 'Install our pre-built apps on Shopify or WooCommerce in less than 5 minutes.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="3" width="15" height="13"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>',
                        'title' => 'Courier & 3PL Integration',
                        'desc' => 'Deep native webhooks for Shiprocket, Delhivery, Bluedart, Pickrr, and iThinkLogistics.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>',
                        'title' => 'Personalized Broadcasts',
                        'desc' => 'Broadcast VIP flash sales, new product drops, and festive discount codes to your buyers.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>',
                        'title' => 'Back-in-Stock Alerts',
                        'desc' => 'Allow shoppers to subscribe to sold-out items and notify them immediately when restocked.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"/></svg>',
                        'title' => 'Automated Product Reviews',
                        'desc' => 'Collect star ratings and customer photo reviews via WhatsApp that sync with Judge.me and Loox.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>',
                        'title' => 'Shared Agent Inbox',
                        'desc' => 'Let customer care agents resolve exchange, return, and size queries from a unified console.'
                    ]
                ],
                'faqs' => [
                    [
                        'q' => 'How does abandoned cart recovery work on WhatsApp with InboxWa?',
                        'a' => 'When a shopper leaves items in their cart, your Shopify or WooCommerce store triggers a webhook to InboxWa. We automatically send a personalized WhatsApp message with product photos, cart summary, and a 1-click checkout link.'
                    ],
                    [
                        'q' => 'Can we reduce Cash on Delivery (COD) returns and fake orders?',
                        'a' => 'Yes! InboxWa sends an instant COD verification message asking the buyer to confirm or cancel. You can also offer an instant 5% or ₹100 discount if they convert to online UPI payment on the spot.'
                    ],
                    [
                        'q' => 'Can customers track their orders inside WhatsApp?',
                        'a' => 'Yes. By integrating with shipping partners like Shiprocket or Delhivery, customers receive automated dispatch, in-transit, out-for-delivery, and delivered alerts with tracking links.'
                    ],
                    [
                        'q' => 'Can we showcase our complete product catalog on WhatsApp?',
                        'a' => 'Yes. InboxWa integrates with WhatsApp native product catalogs. Customers can browse collections, select sizes/colors, and add items to a WhatsApp cart.'
                    ],
                    [
                        'q' => 'Is there any risk of our WhatsApp number getting banned when sending broadcasts?',
                        'a' => 'Zero risk! InboxWa uses the Official Meta WhatsApp Business API with pre-approved HSM templates and tier-based throughput, safeguarding your business number.'
                    ]
                ],
                'cta_heading' => 'Scale Your E-Commerce Revenue on WhatsApp Today',
                'cta_desc' => 'Recover abandoned carts, slash RTO rates, and automate post-purchase notifications with InboxWa.'
            ],

            // =========================================================================
            // 6. AUTOMOTIVE (Reference: getgabs.com/industries/automotive/)
            // =========================================================================
            'automotive' => [
                'slug' => 'automotive',
                'breadcrumb_label' => 'Automotive',
                'title' => 'WhatsApp Business API for Automotive & Dealerships | InboxWa',
                'meta_desc' => 'Schedule vehicle test drives, automate periodic service reminders, dispatch insurance renewal notices, and streamline dealership sales on WhatsApp with InboxWa.',
                'kicker' => 'AUTOMOTIVE DEALERSHIP ENGINE',
                'headline' => 'Drive Test Drives &amp; Service Bookings <br><span class="highlight-text">on WhatsApp</span>',
                'lead' => 'Empower auto dealerships, service centers, OEM distributors, and vehicle rental companies with automated test drive booking, scheduled service reminders, digital brochures, and insurance renewal alerts.',
                'chat_title' => 'InboxWa Auto Bot',
                'chat_messages' => [
                    [
                        'type' => 'user',
                        'text' => 'Hi, I want to test drive the new SUV model this Sunday.'
                    ],
                    [
                        'type' => 'bot',
                        'text' => "Hello Arjun! 🚗 Exciting! The All-New Turbo SUV is ready for your test drive at our Central Showroom. Please pick your preferred Sunday slot:",
                        'buttons' => ['11:00 AM', '02:30 PM', '04:45 PM']
                    ],
                    [
                        'type' => 'user',
                        'text' => '11:00 AM'
                    ],
                    [
                        'type' => 'bot',
                        'text' => "✓ Test drive confirmed for Sunday at 11:00 AM.\n\nOur product specialist Varun will have the vehicle sanitized and ready for you.\n📍 Showroom Location & Directions: https://maps.google.com/..."
                    ]
                ],
                'floating_metric' => [
                    'value' => '62% Increase',
                    'label' => 'Service Center Retention'
                ],
                'stats' => [
                    ['number' => '62%', 'label' => 'Service Retention', 'sub' => 'With 6-month maintenance reminders'],
                    ['number' => '3.8x', 'label' => 'More Test Drives', 'sub' => 'From Click-to-WhatsApp auto ads'],
                    ['number' => '< 30s', 'label' => 'Brochure Dispatch', 'sub' => 'Instant specs and on-road pricing'],
                    ['number' => '85%', 'label' => 'Insurance Renewals', 'sub' => 'Via automated policy expiration alerts']
                ],
                'use_cases' => [
                    [
                        'tag' => 'Showroom Sales',
                        'title' => 'Test Drive Bookings & On-Road Price Estimator',
                        'description' => 'Send instant vehicle specs, EMI breakups, and color variant photos. Enable buyers to book a showroom or home test drive directly on WhatsApp.',
                        'points' => [
                            'Share on-road price breakups including insurance and RTO charges.',
                            'Select test drive location (Showroom visit vs Home test drive).',
                            'Automated driver license photo upload before vehicle handover.'
                        ],
                        'chat_sample' => [
                            'bot' => "Which vehicle segment are you interested in exploring today?",
                            'buttons' => ['Electric Vehicles (EV)', 'Compact SUV', 'Luxury Sedan'],
                            'user' => "Electric Vehicles (EV)"
                        ]
                    ],
                    [
                        'tag' => 'Service Workshop',
                        'title' => 'Automated Periodic Service Reminders & Slot Booking',
                        'description' => 'Automatically notify car owners when their 6-month or 10,000 km periodic service is due, cutting missed maintenance schedules.',
                        'points' => [
                            'Integrated with Dealer Management Systems (DMS).',
                            'Car owners select pickup & drop service directly on chat.',
                            'Share digital job cards and estimated service costs before work begins.'
                        ],
                        'chat_sample' => [
                            'bot' => "Hello Deepak! Your sedan (KA 01 MJ 4920) is due for its 20,000 km Major Service. Would you like to schedule service pickup?",
                            'buttons' => ['Book Service with Pickup', 'Book Showroom Drop-off'],
                            'user' => "Book Service with Pickup"
                        ]
                    ],
                    [
                        'tag' => 'Insurance & Warranty',
                        'title' => 'Policy Expiry & Extended Warranty Renewal Alerts',
                        'description' => 'Send timely reminders 30 days and 7 days prior to motor insurance expiration with instant renewal quote comparisons and payment links.',
                        'points' => [
                            'Zero paperwork renewal with automated policy PDF dispatch.',
                            'Compare comprehensive coverage and zero-depreciation add-ons.',
                            'Dramatically reduces policy lapse rates for dealerships.'
                        ],
                        'chat_sample' => [
                            'bot' => "⚠️ Policy Alert: Your motor insurance policy expires in 12 days. Renew today to retain your 50% No Claim Bonus (NCB).",
                            'buttons' => ['Renew Now (₹14,200)', 'Compare Add-on Covers'],
                            'user' => "Renew Now (₹14,200)"
                        ]
                    ],
                    [
                        'tag' => 'Trade-In & Buyback',
                        'title' => 'Used Car Valuation & Exchange Bonus Prompts',
                        'description' => 'Allow car owners to submit vehicle photos and odometer readings for instant trade-in valuation and new vehicle exchange bonuses.',
                        'points' => [
                            'Conversational photo upload for car exterior, interior, and RC.',
                            'Instant preliminary valuation range based on model and year.',
                            'Generates high-quality exchange leads for new car sales teams.'
                        ],
                        'chat_sample' => [
                            'bot' => "Looking to upgrade your car? Get up to ₹50,000 additional exchange bonus this month. Share your car model and year for instant valuation:",
                            'buttons' => ['Calculate Car Value', 'View New Models'],
                            'user' => "Calculate Car Value"
                        ]
                    ]
                ],
                'journey_steps' => [
                    [
                        'title' => 'Vehicle Inquiry',
                        'desc' => 'Car buyer taps digital ad, scans showroom sticker, or visits website to trigger WhatsApp conversation.',
                        'tag' => 'Step 01 · Buyer Ingestion'
                    ],
                    [
                        'title' => 'Specs & Test Drive',
                        'desc' => 'Buyer receives on-road price PDF, browses trims, and books test drive slot with preferred dealership.',
                        'tag' => 'Step 02 · Interactive Scheduling'
                    ],
                    [
                        'title' => 'Dealership Sales',
                        'desc' => 'Sales consultant conducts test drive; buyer receives financing options, loan EMI calculator, and booking link.',
                        'tag' => 'Step 03 · Deal Closure'
                    ],
                    [
                        'title' => 'Service & Warranty',
                        'desc' => 'Vehicle linked to DMS; automated service reminders, PUC alerts, and insurance renewals sent every 6 months.',
                        'tag' => 'Step 04 · Lifetime Retention'
                    ]
                ],
                'solutions' => [
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="3" width="15" height="13"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>',
                        'title' => 'DMS & CRM Integration',
                        'desc' => 'Syncs with CDK Global, DealerTrack, Autoline, Salesforce Automotive Cloud, and SAP.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>',
                        'title' => 'Insurance Partner Sync',
                        'desc' => 'Automated quotation generation with ICICI Lombard, Bajaj Allianz, HDFC ERGO, and Tata AIG.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>',
                        'title' => 'Multi-Showroom Routing',
                        'desc' => 'Route inquiries to nearest branch dealership based on buyer location or pincode.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>',
                        'title' => 'Live Service Status',
                        'desc' => 'Notify car owners when vehicle enters washing, wheel alignment, or final inspection bays.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>',
                        'title' => 'New Vehicle Launches',
                        'desc' => 'Broadcast high-resolution video reveals and early pre-booking invitations to past vehicle buyers.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M8 14s1.5 2 4 2 4-2 4-2"/></svg>',
                        'title' => 'Digital Roadside Assist',
                        'desc' => '24/7 Breakdown SOS button enables stranded drivers to share GPS location for instant tow-truck dispatch.'
                    ]
                ],
                'faqs' => [
                    [
                        'q' => 'Can prospective buyers book test drives directly through WhatsApp?',
                        'a' => 'Yes. Customers select their preferred vehicle model, showroom location, date, and time slot. Confirmation and reminder alerts are automatically generated.'
                    ],
                    [
                        'q' => 'How do automated service reminders work with our existing DMS?',
                        'a' => 'InboxWa connects to your Dealer Management System via API or automated CSV sync. When a vehicle hits its 6-month service milestone, a personalized WhatsApp alert is dispatched.'
                    ],
                    [
                        'q' => 'Can dealerships send on-road price sheets and brochures?',
                        'a' => 'Yes! You can configure automated flows to share variant comparison PDFs, on-road pricing sheets, and financing EMI tables immediately.'
                    ],
                    [
                        'q' => 'Can we route test drive inquiries to specific showroom sales managers?',
                        'a' => 'Yes. InboxWa supports pincode-based routing, round-robin assignments, and territory management across unlimited branches and dealer locations.'
                    ],
                    [
                        'q' => 'Can customers pay their service bills or booking deposits via WhatsApp?',
                        'a' => 'Yes. InboxWa integrates with UPI and payment gateways to send instant payment links with PDF invoice receipts upon completion.'
                    ]
                ],
                'cta_heading' => 'Accelerate Automotive Sales &amp; Service Retention',
                'cta_desc' => 'Book more test drives, boost workshop occupancy, and automate renewals with InboxWa Official WhatsApp API.'
            ],

            // =========================================================================
            // 7. RESTAURANTS & FOOD (Reference: getgabs.com/industries/restaurant-and-food-business/)
            // =========================================================================
            'restaurants-food' => [
                'slug' => 'restaurants-food',
                'breadcrumb_label' => 'Restaurants & Food',
                'title' => 'WhatsApp Business API for Restaurants & Cloud Kitchens | InboxWa',
                'meta_desc' => 'Automate table reservations, digital food ordering, live delivery updates, and dining loyalty campaigns on WhatsApp with InboxWa.',
                'kicker' => 'RESTAURANT & FOOD AUTOMATION',
                'headline' => 'Take Table Bookings &amp; Food Orders <br><span class="highlight-text">Directly on WhatsApp</span>',
                'lead' => 'Empower fine-dining restaurants, cafes, cloud kitchens, and food chains with automated table reservations, digital WhatsApp food menus, real-time delivery tracking, and zero-commission direct ordering.',
                'chat_title' => 'InboxWa DineBot',
                'chat_messages' => [
                    [
                        'type' => 'user',
                        'text' => 'Hi, I would like to reserve a table for 4 guests this Friday at 8:00 PM.'
                    ],
                    [
                        'type' => 'bot',
                        'text' => "Hello Tanvi! 🍷 Welcome to Olive Bistro. We have a lovely outdoor table available for 4 guests this Friday at 08:00 PM.\n\nWould you like indoor AC seating or our rooftop garden section?",
                        'buttons' => ['Rooftop Garden', 'Indoor AC Lounge']
                    ],
                    [
                        'type' => 'user',
                        'text' => 'Rooftop Garden'
                    ],
                    [
                        'type' => 'bot',
                        'text' => "✓ Table Reserved! Booking ID #OB-942 for 4 guests on Friday at 8:00 PM (Rooftop Garden).\n\nBrowse our chef’s weekend special menu below:"
                    ]
                ],
                'floating_metric' => [
                    'value' => '0% Commission',
                    'label' => 'Direct Food Orders'
                ],
                'stats' => [
                    ['number' => '0%', 'label' => 'Third-Party Commission', 'sub' => 'Keep 100% of order revenue'],
                    ['number' => '4.2x', 'label' => 'Repeat Dine-Ins', 'sub' => 'Via personalized weekend broadcast offers'],
                    ['number' => '< 1 min', 'label' => 'Table Reservation', 'sub' => 'Instant digital confirmation pass'],
                    ['number' => '94%', 'label' => 'Customer Feedback', 'sub' => 'Collected post-meal automatically']
                ],
                'use_cases' => [
                    [
                        'tag' => 'Table Bookings',
                        'title' => 'Automated Table Reservations & Special Requests',
                        'description' => 'Allow diners to book tables 24/7 without calling noisy restaurant lines. Automatically manage guest counts, special occasions (birthdays/anniversaries), and dietary notes.',
                        'points' => [
                            'Instant digital confirmation token with Google Maps location.',
                            'Automated reminder sent 2 hours before the reservation.',
                            'Reduces table no-shows by allowing 1-tap cancellations.'
                        ],
                        'chat_sample' => [
                            'bot' => "Planning a special occasion with us?",
                            'buttons' => ['Birthday Celebration', 'Anniversary Dinner', 'Casual Dining with Friends'],
                            'user' => "Anniversary Dinner"
                        ]
                    ],
                    [
                        'tag' => 'Direct Ordering',
                        'title' => 'Interactive WhatsApp Menu & 0% Commission Delivery',
                        'description' => 'Showcase your mouth-watering food catalog with photos, descriptions, spice levels, and customization options (e.g. extra cheese, no onions).',
                        'points' => [
                            'Save 25-30% commissions lost to third-party food aggregators.',
                            'Direct in-chat UPI payment via Google Pay, PhonePe, and Paytm.',
                            'Automatic printing to kitchen display systems (KDS) and POS.'
                        ],
                        'chat_sample' => [
                            'bot' => "Craving woodfired pizza tonight? 🍕 Check out our artisanal Italian menu:",
                            'buttons' => ['View Food Menu', 'View Today’s Desserts', 'Track Existing Order'],
                            'user' => "View Food Menu"
                        ]
                    ],
                    [
                        'tag' => 'Live Tracking',
                        'title' => 'Real-Time Order Preparation & Dispatch Alerts',
                        'description' => 'Send automatic notifications when food is being prepared, when the delivery rider picks up the order, and when they are approaching the customer’s doorstep.',
                        'points' => [
                            'Live rider tracking link and estimated delivery countdown.',
                            'Eliminates anxious "Where is my food?" customer calls.',
                            'Automated delivery confirmation with review prompt.'
                        ],
                        'chat_sample' => [
                            'bot' => "🛵 Food is on the way! Rider Suresh is arriving in approximately 18 minutes.",
                            'buttons' => ['Track Rider Live', 'Call Rider Suresh'],
                            'user' => "Track Rider Live"
                        ]
                    ],
                    [
                        'tag' => 'Loyalty & Broadcasts',
                        'title' => 'Weekend Flash Promos & Birthday Treats',
                        'description' => 'Broadcast mouth-watering lunch combo offers, weekend live music invites, and complimentary birthday dessert vouchers to your dining database.',
                        'points' => [
                            'Segment diners by favorite cuisines and visit frequency.',
                            'Drive heavy mid-week lunch footfalls with exclusive WhatsApp discounts.',
                            'Automated anniversary and birthday wishes with free appetizer vouchers.'
                        ],
                        'chat_sample' => [
                            'bot' => "🎉 Happy Birthday Sahil! Enjoy a complimentary Tiramisu on the house when you dine with us this week.",
                            'buttons' => ['Reserve Birthday Table', 'View Drinks Menu'],
                            'user' => "Reserve Birthday Table"
                        ]
                    ]
                ],
                'journey_steps' => [
                    [
                        'title' => 'Menu Discovery',
                        'desc' => 'Diner scans table QR code or clicks Instagram food ad, instantly opening your WhatsApp food catalog.',
                        'tag' => 'Step 01 · Guest Ingestion'
                    ],
                    [
                        'title' => 'Cart & Customization',
                        'desc' => 'Diner selects dishes, adds cooking instructions, and chooses delivery address or table number.',
                        'tag' => 'Step 02 · In-Chat Ordering'
                    ],
                    [
                        'title' => 'Instant UPI Payment',
                        'desc' => 'Secure UPI payment link sent; order syncs immediately with kitchen printer and POS billing system.',
                        'tag' => 'Step 03 · Kitchen Sync'
                    ],
                    [
                        'title' => 'Live Tracking & Review',
                        'desc' => 'Live delivery updates dispatched; automated food satisfaction rating collected 45 mins later.',
                        'tag' => 'Step 04 · Post-Dining Loyalty'
                    ]
                ],
                'solutions' => [
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8h1a4 4 0 0 1 0 8h-1"/><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"/><line x1="6" y1="1" x2="6" y2="4"/><line x1="10" y1="1" x2="10" y2="4"/><line x1="14" y1="1" x2="14" y2="4"/></svg>',
                        'title' => 'Restaurant POS Integration',
                        'desc' => 'Connects with Petpooja, Posist, UrbanPiper, Toast, and Square POS.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><line x1="9" y1="3" x2="9" y2="21"/></svg>',
                        'title' => 'QR Code Table Ordering',
                        'desc' => 'Place custom QR codes on dining tables for contactless menu viewing and ordering.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>',
                        'title' => 'Multi-Outlet Routing',
                        'desc' => 'Automatically route orders to the nearest cloud kitchen or restaurant branch based on delivery GPS.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>',
                        'title' => 'Dynamic Sold-Out Toggles',
                        'desc' => 'Instantly toggle item availability in your WhatsApp menu when ingredients run out.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>',
                        'title' => 'Instant UPI Payments',
                        'desc' => 'Support GPay, PhonePe, Paytm, and credit cards with automated receipt generation.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M8 14s1.5 2 4 2 4-2 4-2"/></svg>',
                        'title' => 'Google Review Booster',
                        'desc' => 'Turn satisfied diners into 5-star Google reviews with automated post-meal survey flows.'
                    ]
                ],
                'faqs' => [
                    [
                        'q' => 'Can customers place food delivery orders directly on WhatsApp?',
                        'a' => 'Yes! Diners can browse your complete food menu, customize their order (e.g. extra toppings), share their delivery address, and pay via UPI without leaving WhatsApp.'
                    ],
                    [
                        'q' => 'Do we have to pay commissions on WhatsApp food orders?',
                        'a' => 'No! Unlike third-party aggregators who take 25-30% per order, InboxWa charges zero commission on your orders. You retain 100% of your food revenue.'
                    ],
                    [
                        'q' => 'Does InboxWa integrate with restaurant POS systems like Petpooja or Posist?',
                        'a' => 'Yes. InboxWa integrates with leading POS systems including Petpooja, Posist, and UrbanPiper so WhatsApp orders print directly to your kitchen KDS.'
                    ],
                    [
                        'q' => 'How does table reservation work on WhatsApp?',
                        'a' => 'Guests select date, time slot, and guest count. The bot confirms table availability, stores special notes (e.g. outdoor seating), and sends automatic reminder alerts.'
                    ],
                    [
                        'q' => 'Can we send weekend promotions to our past dining customers?',
                        'a' => 'Yes. You can broadcast personalized offers, weekend brunch invitations, and festival specials to your opted-in customer database.'
                    ]
                ],
                'cta_heading' => 'Start Taking Direct Orders &amp; Reservations on WhatsApp',
                'cta_desc' => 'Save on third-party commissions, eliminate phone booking chaos, and boost repeat visits with InboxWa.'
            ]

        ];
    }

    if (isset($industries[$slug])) {
        return $industries[$slug];
    }

    // Fallback data structure for remaining industries
    return getExtendedIndustryData($slug);
}

function getExtendedIndustryData($slug) {
    static $extended = null;
    if ($extended === null) {
        $extended = [

            // =========================================================================
            // 8. MANUFACTURING (Reference: prpservices.in/whatsapp-business-api-for-manufacturing/)
            // =========================================================================
            'manufacturing' => [
                'slug' => 'manufacturing',
                'breadcrumb_label' => 'Manufacturing',
                'title' => 'WhatsApp Business API for Manufacturing & Industry | InboxWa',
                'meta_desc' => 'Automate supply chain alerts, dealer inquiries, RFQ processing, and dispatch notifications on WhatsApp with InboxWa.',
                'kicker' => 'MANUFACTURING & INDUSTRIAL SUITE',
                'headline' => 'Streamline Supply Chain &amp; Dealer Networks <br><span class="highlight-text">with WhatsApp API</span>',
                'lead' => 'Empower manufacturing plants, industrial suppliers, B2B exporters, and machinery producers with automated Request for Quotation (RFQ) processing, dealer communication, and dispatch tracking.',
                'chat_title' => 'InboxWa Industry Bot',
                'chat_messages' => [
                    [
                        'type' => 'user',
                        'text' => 'Need quotation for 5,000 units of Industrial Valve Model V-402.'
                    ],
                    [
                        'type' => 'bot',
                        'text' => "Hello Rajeev! 🏭 Here is the technical spec sheet and bulk tier pricing for Model V-402:\n\n📄 Spec_Sheet_Valve_V402.pdf\n💰 Tier Price (5k+): ₹420/unit + GST\nEst. Dispatch: 7 business days\n\nWould you like an official formal Proforma Invoice?",
                        'buttons' => ['Request Proforma Invoice', 'Connect with Technical Engineer']
                    ],
                    [
                        'type' => 'user',
                        'text' => 'Request Proforma Invoice'
                    ],
                    [
                        'type' => 'bot',
                        'text' => "✓ Proforma Invoice #PI-8491 generated and emailed to your registered company address. Copy sent here in chat."
                    ]
                ],
                'floating_metric' => [
                    'value' => '3.5x Faster',
                    'label' => 'RFQ Turnaround Time'
                ],
                'stats' => [
                    ['number' => '3.5x', 'label' => 'Faster Quotes', 'sub' => 'Automated RFQ proforma dispatch'],
                    ['number' => '100%', 'label' => 'Dealer Coverage', 'sub' => 'Broadcast inventory updates to 5,000+ dealers'],
                    ['number' => '< 1 hr', 'label' => 'Order Dispatch Alert', 'sub' => 'LR copy & tracking shared on truck loading'],
                    ['number' => '65%', 'label' => 'Fewer Production Calls', 'sub' => 'Self-service batch tracking on WhatsApp']
                ],
                'use_cases' => [
                    [
                        'tag' => 'Quotation & RFQ',
                        'title' => 'Automated RFQ Intake & Technical Spec Sheets',
                        'description' => 'Instantly share technical CAD drawings, safety certifications, and bulk pricing matrices when procurement teams request quotes.',
                        'points' => ['Automated proforma invoice generation based on quantity slabs.', 'Technical drawing and compliance PDF dispatch.', 'Direct CRM sync with SAP, Oracle, and Tally.'],
                        'chat_sample' => [
                            'bot' => "Welcome to Precision Industrial Corp. Which product category do you require quotes for?",
                            'buttons' => ['Hydraulic Valves', 'Pneumatic Actuators', 'Industrial Bearings'],
                            'user' => "Hydraulic Valves"
                        ]
                    ],
                    [
                        'tag' => 'Dealer Network',
                        'title' => 'Dealer Stock Updates & Price Revision Notices',
                        'description' => 'Keep your nationwide distributor network updated with weekly inventory levels, raw material surcharges, and festive dealer schemes.',
                        'points' => ['Broadcast to segmented dealer tiers (Gold, Platinum, Silver).', 'Automated purchase order confirmation and credit limit alerts.', 'Zero spam folder risk with official Meta verified delivery.'],
                        'chat_sample' => [
                            'bot' => "📢 Dealer Notice: Q3 Price list effective Oct 1st is now active. Check updated discount slabs below:",
                            'buttons' => ['Download Q3 Price List', 'Place Distributor Order'],
                            'user' => "Download Q3 Price List"
                        ]
                    ],
                    [
                        'tag' => 'Logistics & Dispatch',
                        'title' => 'Lorry Receipt (LR) & Truck Tracking Dispatch',
                        'description' => 'Automatically dispatch LR copies, transporter contact numbers, and vehicle tracking links the moment goods leave the factory gate.',
                        'points' => ['Triggered automatically when ERP marks order "Dispatched".', 'Transporter phone number and driver details sent to recipient.', 'Reduces post-dispatch tracking inquiries.'],
                        'chat_sample' => [
                            'bot' => "🚛 Dispatch Alert: Order #PO-9921 loaded on Truck KA 04 D 8821. Driver: Mohan (+91 98765 11111). LR Copy attached.",
                            'buttons' => ['Download LR Copy', 'Track Consignment'],
                            'user' => "Download LR Copy"
                        ]
                    ],
                    [
                        'tag' => 'After-Sales & Spares',
                        'title' => 'Machinery Maintenance & Spares Catalog',
                        'description' => 'Allow plant engineers to scan machinery QR codes to view troubleshooting videos, order replacement spare parts, and log service tickets.',
                        'points' => ['Machine-specific QR codes on factory equipment.', 'One-tap ordering for replacement seals, filters, and valves.', 'Instant video support from OEM service engineers.'],
                        'chat_sample' => [
                            'bot' => "Machine #CNC-204 scanned. Need replacement cutting heads or maintenance support?",
                            'buttons' => ['Order Replacement Spares', 'Request Service Technician'],
                            'user' => "Order Replacement Spares"
                        ]
                    ]
                ],
                'journey_steps' => [
                    [
                        'title' => 'RFQ Ingestion',
                        'desc' => 'Procurement officer clicks Google B2B ad or scans catalog QR to initiate inquiry.',
                        'tag' => 'Step 01 · Inquiry'
                    ],
                    [
                        'title' => 'Automated Quote',
                        'desc' => 'Bot gathers dimensions, quantity, and grade; dispatches formal Proforma Invoice.',
                        'tag' => 'Step 02 · RFQ Processing'
                    ],
                    [
                        'title' => 'ERP & Production Sync',
                        'desc' => 'PO verified; production timeline generated in SAP/Tally; batch stage updates sent.',
                        'tag' => 'Step 03 · Manufacturing'
                    ],
                    [
                        'title' => 'Dispatch & After-Sales',
                        'desc' => 'LR copy and transporter tracking dispatched; routine maintenance reminder set.',
                        'tag' => 'Step 04 · Fulfillment'
                    ]
                ],
                'solutions' => [
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 20h20"/><path d="M5 20V8l5 4V8l5 4V4l5 4v12"/></svg>',
                        'title' => 'SAP, Oracle & Tally Sync',
                        'desc' => 'Connect factory floor ERP databases to trigger real-time WhatsApp dispatches.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/></svg>',
                        'title' => 'Machine QR Codes',
                        'desc' => 'Affix durable QR stickers on equipment for instant manual lookup and spares reordering.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/></svg>',
                        'title' => 'Automated LR Notifications',
                        'desc' => 'Dispatch transporter details and e-way bill PDFs automatically to consignees.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>',
                        'title' => 'Tiered Dealer Broadcasts',
                        'desc' => 'Segment distributors by volume and credit rating for targeted scheme announcements.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>',
                        'title' => 'High-Throughput Engine',
                        'desc' => 'Capable of broadcasting to 50,000+ contractors and dealers simultaneously.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>',
                        'title' => 'ISO & Safety Compliance',
                        'desc' => 'Keep digital audit trails of all customer communications, approvals, and dispatches.'
                    ]
                ],
                'faqs' => [
                    [
                        'q' => 'Can we send technical drawings and PDF catalogs on WhatsApp?',
                        'a' => 'Yes. InboxWa handles PDFs, CAD files, spec sheets, and high-resolution machinery diagrams up to 100MB directly in chat.'
                    ],
                    [
                        'q' => 'Does InboxWa integrate with ERP systems like SAP, Oracle, and Tally?',
                        'a' => 'Yes. We support direct REST APIs, webhook triggers, and automated database sync to trigger notifications when POs or dispatch bills are created.'
                    ],
                    [
                        'q' => 'How can we broadcast price revision notices to our dealer network?',
                        'a' => 'You can upload your dealer contacts, segment them by region or tier, and broadcast pre-approved price lists with interactive confirmation buttons.'
                    ],
                    [
                        'q' => 'Can customers track their consignment and download LR copies?',
                        'a' => 'Yes. The system automatically sends Lorry Receipt (LR) copies, vehicle numbers, and transporter contact cards upon dispatch.'
                    ]
                ],
                'cta_heading' => 'Upgrade Your Industrial &amp; Manufacturing Operations',
                'cta_desc' => 'Automate RFQ quotes, speed up dealer dispatches, and scale your supply chain with InboxWa.'
            ],

            // =========================================================================
            // 9. EVENTS & WEDDING (Reference: prpservices.in/step-by-step-guide-to-using-whatsapp-api-for-events/)
            // =========================================================================
            'events-wedding' => [
                'slug' => 'events-wedding',
                'breadcrumb_label' => 'Events & Wedding',
                'title' => 'WhatsApp Business API for Events, Conferences & Weddings | InboxWa',
                'meta_desc' => 'Automate RSVP management, dispatch digital QR entry passes, share live event schedules, and engage attendees on WhatsApp with InboxWa.',
                'kicker' => 'EVENT & WEDDING AUTOMATION',
                'headline' => 'Manage RSVPs &amp; Digital QR Entry <br><span class="highlight-text">Seamlessly on WhatsApp</span>',
                'lead' => 'Empower event organizers, conference producers, wedding planners, and exhibition venues with automated RSVP tracking, QR code check-in passes, live speaker updates, and attendee engagement.',
                'chat_title' => 'InboxWa Event Pass',
                'chat_messages' => [
                    [
                        'type' => 'user',
                        'text' => 'Hi, I registered for TechSummit 2026. Where can I find my entry pass?'
                    ],
                    [
                        'type' => 'bot',
                        'text' => "Hello Sameer! 🎟️ Here is your Official Delegate Entry Pass for TechSummit 2026:\n\n[QR CODE: #TS-8941-VIP]\nDelegate: Sameer Verma\nAccess: All Keynotes + Networking Lounge\nDate: Oct 14-15 | Bangalore Int. Exhibition Centre\n\nShow this QR at Registration Gate 2 for instant badge printing!",
                        'buttons' => ['View Conference Schedule', 'Speaker Lineup', 'Venue Directions']
                    ],
                    [
                        'type' => 'user',
                        'text' => 'View Conference Schedule'
                    ],
                    [
                        'type' => 'bot',
                        'text' => "📅 Keynote: 'The Future of Agentic AI' starts at 10:00 AM in Hall A. Would you like a reminder alert 15 minutes before?"
                    ]
                ],
                'floating_metric' => [
                    'value' => '94% RSVP',
                    'label' => 'Response Rate'
                ],
                'stats' => [
                    ['number' => '94%', 'label' => 'RSVP Responses', 'sub' => 'Compared to 22% on email invites'],
                    ['number' => '3s', 'label' => 'QR Pass Scan', 'sub' => 'Instant badge pickup at registration'],
                    ['number' => '10k+', 'label' => 'Live Alerts', 'sub' => 'Broadcast agenda updates in seconds'],
                    ['number' => '85%', 'label' => 'Feedback Rate', 'sub' => 'Collected post-event automatically']
                ],
                'use_cases' => [
                    [
                        'tag' => 'RSVP Tracking',
                        'title' => 'Instant RSVP Collection & Guest Headcount',
                        'description' => 'Send interactive wedding invitations or summit invites with one-tap "Attending" or "Unable to Attend" buttons for real-time guest counts.',
                        'points' => ['Tracks confirmed guests, plus-ones, and dietary restrictions.', 'Automated reminders for invited guests who haven’t responded.', 'Exports live guest lists to catering and venue teams.'],
                        'chat_sample' => [
                            'bot' => "Ananya & Rohan invite you to celebrate their Wedding Ceremony on Dec 18th in Udaipur 💍 Please confirm your presence:",
                            'buttons' => ['Attending with Family', 'Attending Solo', 'Regretfully Decline'],
                            'user' => "Attending with Family"
                        ]
                    ],
                    [
                        'tag' => 'Digital Ticketing',
                        'title' => 'Dynamic QR Code Entry Passes',
                        'description' => 'Deliver unique scannable QR ticket passes directly to attendee WhatsApp chats, eliminating paper waste and long venue queues.',
                        'points' => ['Scannable by standard mobile barcode scanners at entrance gates.', 'Includes seat number, hall designation, and parking details.', 'Cannot be lost in spam folders like email tickets.'],
                        'chat_sample' => [
                            'bot' => "Your Pass for 'Global Startup Conclave' is ready 🎟️ Show this QR code at Desk 3 for your badge:",
                            'buttons' => ['Save to Photos', 'View Venue Map'],
                            'user' => "Save to Photos"
                        ]
                    ],
                    [
                        'tag' => 'Live Updates',
                        'title' => 'Live Speaker Alerts & Session Reminders',
                        'description' => 'Keep attendees informed throughout the event with real-time notifications when breakout sessions begin, keynote rooms open, or lunch is served.',
                        'points' => ['Alert attendees 15 minutes before their chosen session starts.', 'Notify crowd instantly of room changes or agenda delays.', 'Interactive speaker Q&A submission directly via WhatsApp.'],
                        'chat_sample' => [
                            'bot' => "🔔 Session Alert: 'Scaling SaaS to $10M ARR' with panel starts in 10 mins in Stage 2.",
                            'buttons' => ['View Stage 2 Map', 'Submit Question to Panel'],
                            'user' => "Submit Question to Panel"
                        ]
                    ],
                    [
                        'tag' => 'Post-Event Feedback',
                        'title' => 'Automated Attendee Feedback & Certificate Dispatch',
                        'description' => 'Collect star ratings and deliver verified digital certificates of attendance within 1 hour of the conference closing ceremony.',
                        'points' => ['Automated certificate of participation PDF generation.', 'Collect speaker feedback to improve future conferences.', 'Early bird pre-registration invitations for next year’s event.'],
                        'chat_sample' => [
                            'bot' => "Thank you for attending! Here is your official Certificate of Participation 📜",
                            'buttons' => ['Download Certificate', 'Rate TechSummit 2026'],
                            'user' => "Download Certificate"
                        ]
                    ]
                ],
                'journey_steps' => [
                    [
                        'title' => 'Invitation & RSVP',
                        'desc' => 'Guest receives personalized invitation with 1-tap RSVP buttons and dietary selection.',
                        'tag' => 'Step 01 · Guest RSVP'
                    ],
                    [
                        'title' => 'QR Ticket Delivery',
                        'desc' => 'Confirmed guests receive dynamic QR entry code, venue GPS map, and parking instructions.',
                        'tag' => 'Step 02 · Pass Generation'
                    ],
                    [
                        'title' => 'Day-of-Event Updates',
                        'desc' => 'Fast entrance scan at gate; automated session alerts and interactive speaker Q&A active.',
                        'tag' => 'Step 03 · Real-Time Engagement'
                    ],
                    [
                        'title' => 'Feedback & Certificate',
                        'desc' => 'Digital certificate dispatched; attendee ratings collected; photo album link shared.',
                        'tag' => 'Step 04 · Post-Event Closure'
                    ]
                ],
                'solutions' => [
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>',
                        'title' => 'Ticketing Platform Sync',
                        'desc' => 'Integrates with Eventbrite, Townscript, BookMyShow, and custom registration forms.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/></svg>',
                        'title' => 'Dynamic QR Scanner',
                        'desc' => 'Volunteers can scan attendee WhatsApp QR passes using any iOS or Android phone.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>',
                        'title' => 'VIP Guest Routing',
                        'desc' => 'Tag keynote speakers and VIP sponsors for personalized concierge routing.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>',
                        'title' => 'Live Polling & Q&A',
                        'desc' => 'Run live audience polls during keynote sessions and project real-time results on screen.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M8 14s1.5 2 4 2 4-2 4-2"/></svg>',
                        'title' => 'Photo Album Sharing',
                        'desc' => 'Share Google Drive / SmugMug professional photography albums post-event.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>',
                        'title' => 'Early Bird Registrations',
                        'desc' => 'Convert attendees into next year’s pre-registered delegates with exclusive promo codes.'
                    ]
                ],
                'faqs' => [
                    [
                        'q' => 'Can we send scannable QR tickets to attendees via WhatsApp?',
                        'a' => 'Yes! InboxWa dynamically generates unique QR codes for every attendee and delivers them inside WhatsApp for fast gate entry.'
                    ],
                    [
                        'q' => 'How does automated wedding RSVP tracking work?',
                        'a' => 'Guests receive your digital invitation and click interactive buttons (e.g. Attending / Cannot Attend). The system tracks counts and meal choices in real time.'
                    ],
                    [
                        'q' => 'Can we send live announcements during the event?',
                        'a' => 'Yes. Organizers can broadcast urgent agenda updates, session alerts, or lunch announcements to all registered delegates in seconds.'
                    ],
                    [
                        'q' => 'Can we collect attendee surveys and send attendance certificates?',
                        'a' => 'Yes. Post-event workflows automatically dispatch personalized participation certificates (PDF) upon survey completion.'
                    ]
                ],
                'cta_heading' => 'Elevate Your Events &amp; Weddings with InboxWa',
                'cta_desc' => 'Streamline RSVPs, eliminate paper tickets with QR passes, and engage attendees 24/7 on WhatsApp.'
            ],

            // =========================================================================
            // 10. DIGITAL MARKETING (Reference: quickreply.ai/whatsapp-api-tech-provider)
            // =========================================================================
            'digital-marketing' => [
                'slug' => 'digital-marketing',
                'breadcrumb_label' => 'Digital Marketing',
                'title' => 'WhatsApp Business API for Marketing Agencies | InboxWa',
                'meta_desc' => 'Empower marketing agencies with white-label WhatsApp API, multi-client management, click-to-WhatsApp ad tracking, and broadcast analytics with InboxWa.',
                'kicker' => 'AGENCY & PERFORMANCE MARKETING',
                'headline' => 'Scale Agency Client Campaigns &amp; ROI <br><span class="highlight-text">with WhatsApp API</span>',
                'lead' => 'The ultimate WhatsApp marketing platform engineered for performance agencies, media buyers, and marketing consultants. Manage multiple client workspaces, track Click-to-WhatsApp ad ROAS, and drive broadcast conversions.',
                'chat_title' => 'InboxWa Agency Console',
                'chat_messages' => [
                    [
                        'type' => 'bot',
                        'text' => "📊 Weekly Client Campaign Report for 'Glamour Apparel':\n\n• Broadcast Reach: 48,200 contacts\n• Read Rate: 91.4%\n• Link CTR: 24.8%\n• Revenue Generated: ₹14.2 Lakhs\n• ROAS: 6.8x",
                        'buttons' => ['Download Client White-label PDF', 'Launch Retargeting Flow']
                    ],
                    [
                        'type' => 'user',
                        'text' => 'Launch Retargeting Flow'
                    ],
                    [
                        'type' => 'bot',
                        'text' => "✓ Retargeting sequence activated for 3,420 users who clicked the catalog link but didn’t complete checkout. Auto-incentive: 10% flash voucher."
                    ]
                ],
                'floating_metric' => [
                    'value' => '6.8x ROAS',
                    'label' => 'Average Agency Ad Return'
                ],
                'stats' => [
                    ['number' => '6.8x', 'label' => 'Average ROAS', 'sub' => 'On Click-to-WhatsApp Meta campaigns'],
                    ['number' => '100+', 'label' => 'Client Workspaces', 'sub' => 'Isolated client billing and sub-accounts'],
                    ['number' => '98%', 'label' => 'Message Open Rate', 'sub' => 'Outperforming email & SMS marketing'],
                    ['number' => '100%', 'label' => 'White-Label Ready', 'sub' => 'Your agency branding, domain & logo']
                ],
                'use_cases' => [
                    [
                        'tag' => 'Ad Performance',
                        'title' => 'Click-to-WhatsApp (CTWA) Ad Optimization',
                        'description' => 'Connect Facebook and Instagram ads directly to WhatsApp conversations. Track cost-per-lead (CPL) and return on ad spend (ROAS) in real time.',
                        'points' => ['Direct Meta Ads Manager integration for automated conversions API.', 'Pre-filled message templates attribution tracking per ad creative.', 'Reduces CPL by 40-60% compared to website landing page drop-offs.'],
                        'chat_sample' => [
                            'bot' => "Campaign 'Diwali Mega Sale' active. 420 leads generated today at ₹14.50 CPL.",
                            'buttons' => ['Optimize Ad Spend', 'View Lead Conversions'],
                            'user' => "View Lead Conversions"
                        ]
                    ],
                    [
                        'tag' => 'Multi-Client Console',
                        'title' => 'Multi-Tenant Agency Workspace & Billing',
                        'description' => 'Manage all your brand clients from a single unified agency dashboard with segregated permissions, separate contact lists, and client-level billing.',
                        'points' => ['Separate API keys, webhooks, and team access for each client.', 'White-label dashboard with your agency logo and custom domain.', 'Client-level analytics exports in PDF and CSV format.'],
                        'chat_sample' => [
                            'bot' => "Switching workspace to 'Brand Client: Organic Glow'...",
                            'buttons' => ['Open Broadcast Console', 'View Billing Usage'],
                            'user' => "Open Broadcast Console"
                        ]
                    ],
                    [
                        'tag' => 'Audience Segmentation',
                        'title' => 'RFM Segmentation & Dynamic Retargeting',
                        'description' => 'Segment customer databases by Recency, Frequency, and Monetary value (RFM). Send hyper-targeted campaigns that convert without irritating users.',
                        'points' => ['Dynamic tags (VIP Buyers, Lapsed Leads, Window Shoppers).', 'Exclude recent purchasers automatically to save broadcast credits.', 'Trigger automated re-engagement drip flows after 14, 30, and 60 days.'],
                        'chat_sample' => [
                            'bot' => "Targeting 'High-Value VIPs' (Spent > ₹5,000 in past 60 days). Audience size: 8,420.",
                            'buttons' => ['Confirm Broadcast', 'Schedule for 7 PM'],
                            'user' => "Schedule for 7 PM"
                        ]
                    ],
                    [
                        'tag' => 'Automation Workflows',
                        'title' => 'No-Code Conversational Flow Builder',
                        'description' => 'Design complex lead qualification funnels, quiz bots, and promotional giveaways visually without writing a single line of code.',
                        'points' => ['Drag-and-drop node canvas with branching logic.', 'A/B test different template copies and CTA buttons.', 'Instant webhook integration with Zapier, Make, and Google Sheets.'],
                        'chat_sample' => [
                            'bot' => "Flow 'Holiday Giveaway Quiz' published. 1,240 participants qualified.",
                            'buttons' => ['View Quiz Analytics', 'Export Qualified Leads'],
                            'user' => "Export Qualified Leads"
                        ]
                    ]
                ],
                'journey_steps' => [
                    [
                        'title' => 'CTWA Ad Click',
                        'desc' => 'Shopper clicks agency client ad on Instagram/Facebook and lands in WhatsApp with creative tracking tag.',
                        'tag' => 'Step 01 · Ad Ingestion'
                    ],
                    [
                        'title' => 'AI Chat Qualification',
                        'desc' => 'InboxWa conversational bot qualifies the lead and sends dynamic coupon code or product recommendation.',
                        'tag' => 'Step 02 · Lead Qualification'
                    ],
                    [
                        'title' => 'Conversion Tracking',
                        'desc' => 'Purchase logged via Conversions API; Meta Ads algorithm optimizes bidding for higher-value buyers.',
                        'tag' => 'Step 03 · Meta Ads Feedback'
                    ],
                    [
                        'title' => 'Client ROAS Report',
                        'desc' => 'Automated white-label performance summary generated showing exact revenue attributed to campaign.',
                        'tag' => 'Step 04 · Client Reporting'
                    ]
                ],
                'solutions' => [
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>',
                        'title' => 'White-Label Agency Portal',
                        'desc' => 'Host under your own custom domain (e.g. app.youragency.com) with custom logos and themes.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/></svg>',
                        'title' => 'Meta Conversions API (CAPI)',
                        'desc' => 'Send offline WhatsApp purchase events back to Meta for razor-sharp ad algorithm optimization.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>',
                        'title' => 'Client Wallet & Credit Allocations',
                        'desc' => 'Allocate monthly message quotas and credit balances across individual brand accounts.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>',
                        'title' => 'A/B Testing Engine',
                        'desc' => 'Test multiple copy hooks and interactive buttons to find the highest-converting campaign creative.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>',
                        'title' => 'High Volume Throughput',
                        'desc' => 'Broadcast millions of messages without rate limiting or server latency.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M8 14s1.5 2 4 2 4-2 4-2"/></svg>',
                        'title' => 'Dedicated Agency Manager',
                        'desc' => 'Priority Slack/WhatsApp support channel for template approvals and tech integrations.'
                    ]
                ],
                'faqs' => [
                    [
                        'q' => 'Can agencies white-label the InboxWa platform for their clients?',
                        'a' => 'Yes! You can rebrand the platform with your agency logo, favicon, color scheme, and host it on your own custom domain with segregated client workspaces.'
                    ],
                    [
                        'q' => 'How does Click-to-WhatsApp (CTWA) ad tracking work?',
                        'a' => 'InboxWa tracks the exact Facebook/Instagram ad campaign, ad set, and creative ID that generated the conversation. When a lead buys, our Conversions API syncs the revenue back to Meta.'
                    ],
                    [
                        'q' => 'Can we manage multiple clients from one agency account?',
                        'a' => 'Yes. You get an agency master dashboard where you can switch between clients with 1 click, assign staff permissions, and manage separate billing credits.'
                    ],
                    [
                        'q' => 'How quickly do message templates get approved?',
                        'a' => 'As an official Meta Tech Partner, templates submitted through InboxWa are typically approved within minutes by Meta’s automated review engine.'
                    ]
                ],
                'cta_heading' => 'Become an Official WhatsApp Marketing Partner',
                'cta_desc' => 'Deliver unmatched ROI to your agency clients with white-label WhatsApp automation from InboxWa.'
            ],

            // =========================================================================
            // 11. IT & SOFTWARE (Reference: aisensy.com/whatsapp-business-api)
            // =========================================================================
            'it-software' => [
                'slug' => 'it-software',
                'breadcrumb_label' => 'IT & Software',
                'title' => 'WhatsApp Business API for IT Companies & SaaS | InboxWa',
                'meta_desc' => 'Developer-friendly WhatsApp Business API for IT companies and SaaS: fast REST APIs, real-time webhooks, 2FA OTPs, and automated product onboarding with InboxWa.',
                'kicker' => 'DEVELOPER & SAAS PLATFORM',
                'headline' => 'Supercharge Your Software &amp; SaaS <br><span class="highlight-text">with WhatsApp API</span>',
                'lead' => 'Engineered for CTOs, product managers, and developers. Integrate enterprise WhatsApp messaging into your SaaS product, mobile app, or internal tooling with lightning-fast REST APIs, robust webhooks, and 99.99% uptime SLA.',
                'chat_title' => 'InboxWa Dev Gateway',
                'chat_messages' => [
                    [
                        'type' => 'bot',
                        'text' => "🔐 Security Alert: Your CloudStack verification code is: 849-210.\n\nValid for 5 minutes. Never share this code with anyone.",
                        'buttons' => ['Approve Login', 'Report Suspicious Activity']
                    ],
                    [
                        'type' => 'user',
                        'text' => 'Approve Login'
                    ],
                    [
                        'type' => 'bot',
                        'text' => "✓ Two-Factor Authentication successful. Session active on macOS (Chrome · Mumbai, India)."
                    ]
                ],
                'floating_metric' => [
                    'value' => '99.99% SLA',
                    'label' => 'Enterprise API Uptime'
                ],
                'stats' => [
                    ['number' => '99.99%', 'label' => 'API Uptime SLA', 'sub' => 'Redundant multi-region cloud clusters'],
                    ['number' => '< 2.5s', 'label' => 'OTP Delivery', 'sub' => 'Direct carrier priority routes'],
                    ['number' => '50k/min', 'label' => 'Throughput Scale', 'sub' => 'Built for high-volume enterprise workloads'],
                    ['number' => '100%', 'label' => 'REST & Webhook Support', 'sub' => 'Ready SDKs in Python, Node, PHP & Go']
                ],
                'use_cases' => [
                    [
                        'tag' => 'Authentication',
                        'title' => 'Lightning-Fast WhatsApp 2FA & OTP Verification',
                        'description' => 'Slash SMS OTP costs by up to 50% while dramatically improving delivery rates. Deliver secure authentication codes in under 3 seconds.',
                        'points' => ['Fallback logic to SMS if WhatsApp message is unread after 30 seconds.', 'Dynamic 6-digit one-tap copy buttons on mobile.', 'End-to-end encrypted protocol prevents SIM swapping attacks.'],
                        'chat_sample' => [
                            'bot' => "Your single-use login code for DevOpsCloud is 719402.",
                            'buttons' => ['Copy Code 719402'],
                            'user' => "Copy Code 719402"
                        ]
                    ],
                    [
                        'tag' => 'Incident Alerts',
                        'title' => 'Critical DevOps & Server Incident Notifications',
                        'description' => 'Route alerts from PagerDuty, Datadog, AWS CloudWatch, and GitHub directly to engineering team on-call channels.',
                        'points' => ['Acknowledge or escalate incidents directly with interactive buttons.', 'Bypass missed emails during midnight server outages.', 'Attach log snippets and stack traces in message.'],
                        'chat_sample' => [
                            'bot' => "🚨 P1 Outage: Database cluster US-EAST-1 response latency > 2,000ms. CPU: 98%.",
                            'buttons' => ['Acknowledge Incident', 'Trigger Auto-Failover', 'Page On-Call Lead'],
                            'user' => "Trigger Auto-Failover"
                        ]
                    ],
                    [
                        'tag' => 'SaaS Product Growth',
                        'title' => 'Automated Free Trial Onboarding & Feature Guides',
                        'description' => 'Guide newly signed-up users through product activation milestones, video tutorials, and subscription upgrade prompts.',
                        'points' => ['Triggered by product event webhooks (e.g. created first project).', 'Nudge users who stall during onboarding setup.', 'Drive 2.8x higher trial-to-paid subscription conversion.'],
                        'chat_sample' => [
                            'bot' => "Hi Alex! Ready to invite your team to your new workspace?",
                            'buttons' => ['Watch 2-Min Setup Video', 'Book 1-on-1 Onboarding Call'],
                            'user' => "Watch 2-Min Setup Video"
                        ]
                    ],
                    [
                        'tag' => 'Billing Automation',
                        'title' => 'Subscription Renewal & Payment Failure Dunning',
                        'description' => 'Send automated invoice receipts, renewal notices, and credit card failure alerts to prevent involuntary SaaS churn.',
                        'points' => ['Direct Stripe, Chargebee, and Razorpay subscription sync.', 'One-tap link for users to update expired payment cards.', 'Reduces involuntary subscription churn by up to 35%.'],
                        'chat_sample' => [
                            'bot' => "Notice: Your monthly Pro Plan renewal payment failed (Card ending in 4012). Tap below to update payment method:",
                            'buttons' => ['Update Payment Card', 'Download Last Invoice'],
                            'user' => "Update Payment Card"
                        ]
                    ]
                ],
                'journey_steps' => [
                    [
                        'title' => 'API Integration',
                        'desc' => 'Developer generates API keys in InboxWa console and integrates REST endpoints in minutes.',
                        'tag' => 'Step 01 · Developer Setup'
                    ],
                    [
                        'title' => 'Event Triggers',
                        'desc' => 'SaaS application fires webhooks for user signups, 2FA login, subscription updates, or system alerts.',
                        'tag' => 'Step 02 · Webhook Dispatch'
                    ],
                    [
                        'title' => 'Instant Delivery',
                        'desc' => 'Message routed through high-priority tier; delivery receipts returned via webhook in 200ms.',
                        'tag' => 'Step 03 · High-Throughput Delivery'
                    ],
                    [
                        'title' => 'Two-Way Actions',
                        'desc' => 'User clicks interactive button or replies; event callback triggers automated business logic in app.',
                        'tag' => 'Step 04 · Bidirectional Loop'
                    ]
                ],
                'solutions' => [
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>',
                        'title' => 'REST APIs & SDKs',
                        'desc' => 'Complete documentation and copy-paste code snippets for Node.js, Python, PHP, Java, and Go.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>',
                        'title' => 'High-Speed Webhooks',
                        'desc' => 'Receive real-time callbacks for sent, delivered, read, failed, and incoming reply events.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>',
                        'title' => 'Enterprise Security & SOC2',
                        'desc' => 'TLS 1.3 encryption, IP whitelisting, data masking, and automated token revocation.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>',
                        'title' => 'Sandbox Testing Environment',
                        'desc' => 'Test API payloads, template variables, and mock incoming events without touching live numbers.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>',
                        'title' => 'Auto-Scaling Infrastructure',
                        'desc' => 'Handles traffic spikes effortlessly during global flash sales and product launches.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M8 14s1.5 2 4 2 4-2 4-2"/></svg>',
                        'title' => '24/7 Developer Support',
                        'desc' => 'Direct Slack channel with senior API solution architects for rapid troubleshooting.'
                    ]
                ],
                'faqs' => [
                    [
                        'q' => 'How easy is it to integrate InboxWa into our tech stack?',
                        'a' => 'Very easy. We provide simple RESTful JSON endpoints and ready SDKs in Python, Node.js, PHP, and Go. Most developers complete basic messaging setup in less than 30 minutes.'
                    ],
                    [
                        'q' => 'What is the API latency for OTP and transaction verification?',
                        'a' => 'Our enterprise routing guarantees delivery within 2.5 seconds with high-priority queuing designed specifically for 2FA and transactional notifications.'
                    ],
                    [
                        'q' => 'Do you provide webhooks for inbound customer replies?',
                        'a' => 'Yes. Whenever a user replies or clicks an interactive button, your configured webhook endpoint receives a secure JSON payload with event details.'
                    ],
                    [
                        'q' => 'Is there a testing sandbox for developers?',
                        'a' => 'Yes! We provide a free developer sandbox where you can test API calls, payload structures, and webhook event listeners before going live.'
                    ]
                ],
                'cta_heading' => 'Start Building on the InboxWa WhatsApp API Today',
                'cta_desc' => 'Deliver mission-critical OTPs, automate SaaS user engagement, and scale with 99.99% uptime.'
            ],

            // =========================================================================
            // 12. RETAIL (Reference: omnichat.ai/whatsapp-business-api/)
            // =========================================================================
            'retail' => [
                'slug' => 'retail',
                'breadcrumb_label' => 'Retail',
                'title' => 'WhatsApp Business API for Retail & Store Chains | InboxWa',
                'meta_desc' => 'Connect physical retail stores with digital WhatsApp commerce. In-store QR scans, member loyalty cards, flash sale broadcasts, and O2O sales with InboxWa.',
                'kicker' => 'OMNICHANNEL RETAIL PLATFORM',
                'headline' => 'Bridge In-Store &amp; Online Retail Sales <br><span class="highlight-text">with WhatsApp API</span>',
                'lead' => 'Empower retail stores, apparel chains, electronics outlets, and department stores with Online-to-Offline (O2O) customer journeys, in-store QR loyalty registration, flash sale broadcasts, and personal shopper assistance.',
                'chat_title' => 'InboxWa Retail Concierge',
                'chat_messages' => [
                    [
                        'type' => 'user',
                        'text' => 'Hi, is the Classic Leather Jacket in size M available at your Phoenix Mall store?'
                    ],
                    [
                        'type' => 'bot',
                        'text' => "Hello Varun! 🧥 Yes, we have 2 pieces in Size M at Phoenix Mall! We can hold it for you for 24 hours.\n\nWould you like us to reserve it, or have it delivered to your home today?",
                        'buttons' => ['Hold at Store (24 Hours)', 'Deliver to Home Now']
                    ],
                    [
                        'type' => 'user',
                        'text' => 'Hold at Store (24 Hours)'
                    ],
                    [
                        'type' => 'bot',
                        'text' => "✓ Reserved! Your reservation pass #PHX-482 is active until tomorrow 8 PM. Store associate Meena will assist you at the billing desk."
                    ]
                ],
                'floating_metric' => [
                    'value' => '4.8x Higher',
                    'label' => 'Retail Store Footfalls'
                ],
                'stats' => [
                    ['number' => '4.8x', 'label' => 'Store Footfall', 'sub' => 'Driven by targeted weekend WhatsApp promos'],
                    ['number' => '35%', 'label' => 'Higher Basket Value', 'sub' => 'When clients chat with store associates'],
                    ['number' => '92%', 'label' => 'Loyalty Adoption', 'sub' => 'Via frictionless 1-tap WhatsApp signup'],
                    ['number' => '3x', 'label' => 'Faster Inventory Turnover', 'sub' => 'Flash broadcasts for end-of-season clearance']
                ],
                'use_cases' => [
                    [
                        'tag' => 'O2O Commerce',
                        'title' => 'Click-and-Collect & In-Store Reserve',
                        'description' => 'Allow shoppers to check store inventory on WhatsApp, reserve garments in their size, and collect at their nearest physical retail outlet.',
                        'points' => ['Check real-time stock across multiple city stores.', 'Hold items for 24-48 hours with digital reservation tokens.', 'Increases store walk-ins and impulse upselling.'],
                        'chat_sample' => [
                            'bot' => "Looking to try before you buy? Reserve your size at our nearest retail store:",
                            'buttons' => ['Reserve Size M', 'Check Nearby Stores'],
                            'user' => "Reserve Size M"
                        ]
                    ],
                    [
                        'tag' => 'In-Store Loyalty',
                        'title' => 'Frictionless QR Loyalty Cards & Reward Points',
                        'description' => 'Replace physical plastic loyalty cards and lengthy paper forms. Customers scan a counter QR code to view their reward points and redeem discounts instantly.',
                        'points' => ['1-tap mobile number registration directly in chat.', 'Automated reward points balance balance updates after each billing.', 'Exclusive member-only discounts and early access sales.'],
                        'chat_sample' => [
                            'bot' => "Welcome to Luxe Club! You have 850 Reward Points (Value: ₹850). Apply points on today's bill?",
                            'buttons' => ['Redeem ₹850 Now', 'Save for Later'],
                            'user' => "Redeem ₹850 Now"
                        ]
                    ],
                    [
                        'tag' => 'Personal Shopper',
                        'title' => 'Virtual Personal Shopper & Video Consultations',
                        'description' => 'Connect high-spending VIP customers with in-store personal stylists who share photos, style advice, and video walkthroughs on WhatsApp.',
                        'points' => ['Multi-agent shared team inbox for in-store staff.', 'Send payment links and arrange home delivery directly from chat.', 'Builds lifelong personal relationships with luxury clients.'],
                        'chat_sample' => [
                            'bot' => "Hi Neha, Stylist Pooja has picked 3 dresses matching your preferences:",
                            'buttons' => ['View Styling Video', 'Order for Home Trial'],
                            'user' => "View Styling Video"
                        ]
                    ],
                    [
                        'tag' => 'Flash Sales',
                        'title' => 'End-of-Season Clearance & Flash Broadcasts',
                        'description' => 'Broadcast seasonal clearance sales, flat 50% discount weekends, and exclusive new arrival previews with 98% open rates.',
                        'points' => ['Segment shoppers by preferred categories (menswear, footwear, kids).', 'Include barcode / voucher code for instant cashier scanning.', 'Track exact in-store revenue generated per broadcast.'],
                        'chat_sample' => [
                            'bot' => "🔥 48-Hour Weekend Flash Sale: Flat 40% OFF across all stores. Show this WhatsApp pass at checkout:",
                            'buttons' => ['View Nearest Store', 'Shop Online Instead'],
                            'user' => "View Nearest Store"
                        ]
                    ]
                ],
                'journey_steps' => [
                    [
                        'title' => 'QR / Ad Touchpoint',
                        'desc' => 'Customer scans checkout QR code or clicks Instagram ad to join retail loyalty club.',
                        'tag' => 'Step 01 · Ingestion'
                    ],
                    [
                        'title' => 'Inventory & Styling',
                        'desc' => 'Shopper checks product availability at nearest store or books personal styling session.',
                        'tag' => 'Step 02 · Product Engagement'
                    ],
                    [
                        'title' => 'In-Store Purchase',
                        'desc' => 'Shopper visits store, redeems loyalty points via WhatsApp barcode, and completes checkout.',
                        'tag' => 'Step 03 · Store Fulfillment'
                    ],
                    [
                        'title' => 'Post-Purchase Loyalty',
                        'desc' => 'Digital receipt delivered; reward points updated; targeted replenishment offers dispatched.',
                        'tag' => 'Step 04 · Lifetime Retention'
                    ]
                ],
                'solutions' => [
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>',
                        'title' => 'Retail POS & ERP Sync',
                        'desc' => 'Integrates with Ginesys, Logic ERP, SAP Retail, Microsoft Dynamics, and Shopify POS.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/></svg>',
                        'title' => 'In-Store Barcode Scanner',
                        'desc' => 'Cashiers scan customer WhatsApp vouchers directly from mobile screens at checkout.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>',
                        'title' => 'Store-Level Routing',
                        'desc' => 'Route customer inquiries to the staff at the nearest retail outlet based on GPS.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>',
                        'title' => 'Paperless E-Bills',
                        'desc' => 'Send digital GST tax invoices directly to customer WhatsApp, saving paper and printing costs.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>',
                        'title' => 'Staff Incentive Tracking',
                        'desc' => 'Track which sales associate closed the sale on WhatsApp for commission attribution.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M8 14s1.5 2 4 2 4-2 4-2"/></svg>',
                        'title' => 'Feedback & Returns',
                        'desc' => 'Automate hassle-free exchange and return requests directly through conversational chat.'
                    ]
                ],
                'faqs' => [
                    [
                        'q' => 'Can customers check in-store stock availability on WhatsApp?',
                        'a' => 'Yes. By integrating your retail inventory system or ERP, customers can select their nearest branch and check if a specific size or color is available.'
                    ],
                    [
                        'q' => 'How does the digital e-receipt feature work?',
                        'a' => 'At checkout, the cashier enters the customer’s phone number. Your POS triggers an API call to InboxWa, delivering a compliant digital tax invoice on WhatsApp instantly.'
                    ],
                    [
                        'q' => 'Can store associates chat with customers from one verified business number?',
                        'a' => 'Yes. With InboxWa’s Shared Team Inbox, store managers across all branch locations can chat with customers, share product photos, and process orders collaboratively.'
                    ],
                    [
                        'q' => 'How can we replace physical plastic loyalty cards with WhatsApp?',
                        'a' => 'Customers simply scan a QR code at your checkout counter. Their profile is instantly created, and their loyalty points balance is accessible anytime via WhatsApp.'
                    ]
                ],
                'cta_heading' => 'Revolutionize Your Retail Chain with InboxWa',
                'cta_desc' => 'Drive footfalls, automate digital e-receipts, and connect store associates with VIP shoppers on WhatsApp.'
            ],

            // =========================================================================
            // 13. PROFESSIONAL SERVICES (Reference: whatsappbusiness.com/products/business-platform/)
            // =========================================================================
            'professional-services' => [
                'slug' => 'professional-services',
                'breadcrumb_label' => 'Professional Services',
                'title' => 'WhatsApp Business API for Professional Services & Consultants | InboxWa',
                'meta_desc' => 'Automate client intake, consultation scheduling, document collection, and retainer invoicing on WhatsApp with InboxWa.',
                'kicker' => 'CONSULTING & LEGAL AUTOMATION',
                'headline' => 'Automate Client Intake &amp; Retainers <br><span class="highlight-text">with WhatsApp API</span>',
                'lead' => 'Empower management consulting firms, law offices, accounting agencies, tax advisors, and architecture practices with automated client intake, consultation booking, document sharing, and retainer invoice management.',
                'chat_title' => 'InboxWa Advisory Bot',
                'chat_messages' => [
                    [
                        'type' => 'user',
                        'text' => 'Hi, I need legal consultation regarding cross-border corporate IP structuring.'
                    ],
                    [
                        'type' => 'bot',
                        'text' => "Hello Siddharth! ⚖️ Our Corporate Law Practice can assist you. Partner Adv. Meenakshi Iyer is available for an initial 45-min strategic consultation.\n\nPlease select your preferred slot:",
                        'buttons' => ['Thursday, 03:00 PM', 'Friday, 11:30 AM', 'Friday, 04:00 PM']
                    ],
                    [
                        'type' => 'user',
                        'text' => 'Thursday, 03:00 PM'
                    ],
                    [
                        'type' => 'bot',
                        'text' => "✓ Consultation confirmed for Thursday at 03:00 PM (Google Meet video call link has been shared).\n\nPlease upload any relevant incorporation documents here for preliminary partner review."
                    ]
                ],
                'floating_metric' => [
                    'value' => '3.6x Faster',
                    'label' => 'Client Onboarding'
                ],
                'stats' => [
                    ['number' => '3.6x', 'label' => 'Faster Intake', 'sub' => 'Automated conversational KYC and questionnaires'],
                    ['number' => '90%', 'label' => 'Invoice Collection', 'sub' => 'Via automated WhatsApp payment reminders'],
                    ['number' => '< 15 mins', 'label' => 'Response Time', 'sub' => 'To high-value corporate inquiries'],
                    ['number' => '100%', 'label' => 'Confidentiality SLA', 'sub' => 'Encrypted client communications']
                ],
                'use_cases' => [
                    [
                        'tag' => 'Client Intake',
                        'title' => 'Conversational Intake Questionnaires & Lead Screening',
                        'description' => 'Replace boring static web forms with interactive WhatsApp questions that gather project scope, budget, and corporate details in minutes.',
                        'points' => ['Automated qualification ensures consultants only meet high-intent clients.', 'Upload pitch decks, balance sheets, and NDAs directly in chat.', 'Automated sync to Practice Management CRMs.'],
                        'chat_sample' => [
                            'bot' => "What is your primary area of advisory requirement?",
                            'buttons' => ['Corporate Taxation', 'Mergers & Acquisitions', 'Regulatory Compliance'],
                            'user' => "Corporate Taxation"
                        ]
                    ],
                    [
                        'tag' => 'Consultation Booking',
                        'title' => 'Automated Calendar Scheduling & Fee Collection',
                        'description' => 'Allow clients to view consultant availability and book paid advisory sessions with upfront fee settlement via payment links.',
                        'points' => ['Syncs in real time with Google Calendar and Microsoft Outlook.', 'Automated Google Meet or Zoom link generation.', 'Eliminates back-and-forth email scheduling tennis.'],
                        'chat_sample' => [
                            'bot' => "Reserve your 1-on-1 strategy session with Managing Partner:",
                            'buttons' => ['Book Strategy Session', 'View Consultant Bio'],
                            'user' => "Book Strategy Session"
                        ]
                    ],
                    [
                        'tag' => 'Document Exchange',
                        'title' => 'Secure Contract & Document Collection',
                        'description' => 'Collect signed agreements, audited financial statements, and identification proofs via encrypted WhatsApp channels with automatic virus scanning.',
                        'points' => ['Instant mobile document upload without email attachment limits.', 'Send e-sign reminder links for quick engagement letter approval.', 'Encrypted storage compliant with professional confidentiality rules.'],
                        'chat_sample' => [
                            'bot' => "Please upload your signed Non-Disclosure Agreement (NDA) to proceed:",
                            'buttons' => ['Upload Signed NDA', 'Download Blank NDA Template'],
                            'user' => "Upload Signed NDA"
                        ]
                    ],
                    [
                        'tag' => 'Billing & Retainers',
                        'title' => 'Retainer Invoicing & Automated Dunning Notices',
                        'description' => 'Deliver monthly retainer invoices and payment links directly to corporate clients with automated polite payment reminders before due dates.',
                        'points' => ['Drastically reduces accounts receivable DSO (Days Sales Outstanding).', 'One-tap UPI and NEFT payment instructions.', 'Automated GST tax receipt delivery upon payment receipt.'],
                        'chat_sample' => [
                            'bot' => "Invoice #INV-2026-89 for August Advisory Retainer is ready.\nAmount: ₹75,000 + GST",
                            'buttons' => ['Pay via UPI / Card', 'Download PDF Invoice'],
                            'user' => "Pay via UPI / Card"
                        ]
                    ]
                ],
                'journey_steps' => [
                    [
                        'title' => 'Client Inquiry',
                        'desc' => 'Prospective corporate client clicks website advisory button or scans business card QR code.',
                        'tag' => 'Step 01 · Client Ingestion'
                    ],
                    [
                        'title' => 'Intake & NDA',
                        'desc' => 'InboxWa bot screens legal/consulting scope, shares blank NDA, and collects signed agreement.',
                        'tag' => 'Step 02 · Qualification & Intake'
                    ],
                    [
                        'title' => 'Partner Booking',
                        'desc' => 'Client selects calendar slot; consultation fee settled; video link and calendar invite issued.',
                        'tag' => 'Step 03 · Consultation Setup'
                    ],
                    [
                        'title' => 'Retainer & Billing',
                        'desc' => 'Project status updates dispatched; monthly retainer invoices delivered with 1-click settlement.',
                        'tag' => 'Step 04 · Long-Term Advisory'
                    ]
                ],
                'solutions' => [
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>',
                        'title' => 'Practice Management Sync',
                        'desc' => 'Integrates with Clio, PracticePanther, QuickBooks, Zoho Books, and Tally.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>',
                        'title' => 'Google & Outlook Calendar',
                        'desc' => 'Real-time two-way synchronization prevents double bookings across partners.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>',
                        'title' => 'Bank-Grade Confidentiality',
                        'desc' => 'End-to-end encryption safeguards attorney-client privilege and financial disclosures.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>',
                        'title' => 'Automated Tax Reminders',
                        'desc' => 'Send compliance reminders for GST filing, advance tax dates, and annual audit deadlines.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>',
                        'title' => 'Multi-Partner Inboxes',
                        'desc' => 'Route incoming corporate inquiries to specific practice leads (Tax, Audit, Legal, HR).'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>',
                        'title' => 'Automated Retainer Billing',
                        'desc' => 'Send recurring payment notices and capture UPI/NetBanking payments on schedule.'
                    ]
                ],
                'faqs' => [
                    [
                        'q' => 'Can we collect upfront consultation fees before booking appointments?',
                        'a' => 'Yes. InboxWa integrates with payment gateways to send payment links. The calendar slot is only confirmed after successful fee payment.'
                    ],
                    [
                        'q' => 'Can clients upload confidential PDF documents safely?',
                        'a' => 'Yes. WhatsApp conversations are protected by end-to-end encryption, ensuring full confidentiality for legal, tax, and accounting documents.'
                    ],
                    [
                        'q' => 'Does InboxWa sync with our Outlook and Google Calendar schedules?',
                        'a' => 'Yes. Two-way synchronization checks consultant busy slots in real time to prevent calendar conflicts.'
                    ],
                    [
                        'q' => 'Can we send automated monthly retainer invoices to corporate clients?',
                        'a' => 'Yes. You can trigger automated invoice PDF dispatches and friendly payment reminder alerts to your client directory.'
                    ]
                ],
                'cta_heading' => 'Upgrade Your Consulting &amp; Advisory Practice',
                'cta_desc' => 'Automate client onboarding, streamline consultation bookings, and accelerate retainer payments with InboxWa.'
            ],

            // =========================================================================
            // 14. B2B & SUPPLIERS (Reference: whatsappbusiness.com/products/business-platform/)
            // =========================================================================
            'b2b-suppliers' => [
                'slug' => 'b2b-suppliers',
                'breadcrumb_label' => 'B2B & Suppliers',
                'title' => 'WhatsApp Business API for B2B Suppliers & Wholesalers | InboxWa',
                'meta_desc' => 'Automate wholesale catalogs, tiered bulk pricing quotes, purchase order reorders, and distributor credit alerts with InboxWa B2B WhatsApp API.',
                'kicker' => 'B2B WHOLESALE & DISTRIBUTION',
                'headline' => 'Automate Wholesale Orders &amp; B2B Sales <br><span class="highlight-text">on WhatsApp</span>',
                'lead' => 'Empower wholesale distributors, B2B vendors, bulk traders, and merchant suppliers with digital product catalogs, tier-based price calculators, automated reorder triggers, and distributor credit management.',
                'chat_title' => 'InboxWa Wholesale Bot',
                'chat_messages' => [
                    [
                        'type' => 'user',
                        'text' => 'Hi, we want to reorder 200 boxes of A4 Copier Paper (75 GSM) for our office supplies store.'
                    ],
                    [
                        'type' => 'bot',
                        'text' => "Hello Metro Stationery! 📦 Here is your repeat order summary:\n\n• Item: A4 Copier Paper (75 GSM)\n• Quantity: 200 Boxes\n• Wholesale Tier Rate: ₹820/box (Saved ₹40/box)\n• Subtotal: ₹1,64,000 + GST\n\nDispatch available tomorrow from our Bhiwandi Warehouse.",
                        'buttons' => ['Confirm Repeat Order', 'Apply 30-Day Credit Line', 'Modify Quantity']
                    ],
                    [
                        'type' => 'user',
                        'text' => 'Confirm Repeat Order'
                    ],
                    [
                        'type' => 'bot',
                        'text' => "✓ Order #WO-4819 confirmed! Invoiced to your account. Loading begins tomorrow morning at 09:00 AM."
                    ]
                ],
                'floating_metric' => [
                    'value' => '4.2x Faster',
                    'label' => 'B2B Reorder Cycles'
                ],
                'stats' => [
                    ['number' => '4.2x', 'label' => 'Faster Reorders', 'sub' => '1-tap repeat wholesale ordering'],
                    ['number' => '100%', 'label' => 'Dealer Reach', 'sub' => 'Broadcast stock updates to all verified vendors'],
                    ['number' => '< 2 mins', 'label' => 'Bulk Quote Generation', 'sub' => 'Instant tier pricing calculation'],
                    ['number' => '40%', 'label' => 'Less Manual Data Entry', 'sub' => 'Direct ERP and accounting sync']
                ],
                'use_cases' => [
                    [
                        'tag' => 'Wholesale Ordering',
                        'title' => 'Digital Wholesale Catalogs & Tiered Pricing',
                        'description' => 'Showcase bulk products with tiered pricing slabs (e.g. 50+ units, 500+ units, 2000+ units). Retailers and buyers can order directly via WhatsApp.',
                        'points' => ['Automated quantity-based discount calculation.', 'Restricted access for approved wholesale merchants only.', 'Downloadable PDF invoices with GST calculations.'],
                        'chat_sample' => [
                            'bot' => "Welcome to Apex Wholesale Supplies! Select your product category:",
                            'buttons' => ['Packaging Materials', 'Office Supplies', 'Safety Equipment'],
                            'user' => "Packaging Materials"
                        ]
                    ],
                    [
                        'tag' => 'Repeat Reorders',
                        'title' => '1-Click Fast Reorder Sequences',
                        'description' => 'Make routine bulk replenishment effortless. Send proactive inventory refill alerts based on customer average consumption cycles.',
                        'points' => ['One-tap "Repeat Last Order" button saves 20 minutes of manual calling.', 'Pre-filled shipping address and payment terms.', 'Reduces distributor churn to rival competitors.'],
                        'chat_sample' => [
                            'bot' => "Hi City Mart! Based on your monthly cycle, your stock of Corrugated Boxes may be running low. Reorder now?",
                            'buttons' => ['Reorder Last 100 Units', 'Adjust Quantity'],
                            'user' => "Reorder Last 100 Units"
                        ]
                    ],
                    [
                        'tag' => 'Credit & Ledger',
                        'title' => 'Distributor Ledger Statements & Payment Reminders',
                        'description' => 'Enable dealers to check their credit balance, outstanding dues, and download monthly statement PDFs 24/7 on WhatsApp.',
                        'points' => ['Instant credit limit and balance inquiries on demand.', 'Automated polite payment reminders 3 days before credit term expiry.', 'Reduces bad debts and accelerates vendor cash flow.'],
                        'chat_sample' => [
                            'bot' => "Your Account Balance for Metro Corp:\nCredit Limit: ₹10,00,000\nAvailable: ₹6,40,000\nOutstanding Due: ₹3,60,000 (Due: Sept 25)",
                            'buttons' => ['Download Ledger PDF', 'Pay Dues via NEFT/UPI'],
                            'user' => "Download Ledger PDF"
                        ]
                    ],
                    [
                        'tag' => 'New Inventory',
                        'title' => 'Fresh Consignment Arrival & Flash Wholesaler Promos',
                        'description' => 'Broadcast container arrivals, closeout clearance lots, and seasonal distributor incentives directly to your verified buyer lists.',
                        'points' => ['Direct delivery with 98% open rates ensures inventory moves fast.', 'Include photos, packing specs, and minimum order quantities (MOQ).', 'Track which retailers clicked the brochure.'],
                        'chat_sample' => [
                            'bot' => "🚢 Fresh Import Container Arrived: Premium Thermal Paper Rolls at introductory container-load rates. MOQ: 50 Cartons.",
                            'buttons' => ['Request Container Quote', 'View Specs'],
                            'user' => "Request Container Quote"
                        ]
                    ]
                ],
                'journey_steps' => [
                    [
                        'title' => 'Merchant Inquiry',
                        'desc' => 'Wholesaler or dealer initiates chat or logs in with their verified business phone number.',
                        'tag' => 'Step 01 · B2B Login'
                    ],
                    [
                        'title' => 'Catalog & Tier Pricing',
                        'desc' => 'Buyer browses wholesale products, selects volume tier, and configures delivery requirements.',
                        'tag' => 'Step 02 · Volume Ordering'
                    ],
                    [
                        'title' => 'PO & Credit Verification',
                        'desc' => 'System validates credit balance; Purchase Order created and routed to warehouse dispatch team.',
                        'tag' => 'Step 03 · Warehouse Sync'
                    ],
                    [
                        'title' => 'Dispatch & Ledger',
                        'desc' => 'Lorry receipt dispatched; ledger statement updated; automated reorder notification scheduled.',
                        'tag' => 'Step 04 · Fulfillment & Retention'
                    ]
                ],
                'solutions' => [
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>',
                        'title' => 'Wholesale ERP & Accounting',
                        'desc' => 'Seamless sync with TallyPrime, Busy, Zoho Books, SAP B1, and Marg ERP.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><line x1="9" y1="3" x2="9" y2="21"/></svg>',
                        'title' => 'Tiered B2B Catalogs',
                        'desc' => 'Different pricing tiers for master distributors, wholesalers, and retail merchants.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>',
                        'title' => 'Credit Term Safeguards',
                        'desc' => 'Automatic order holds if a distributor’s outstanding balance exceeds credit limits.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>',
                        'title' => 'Live Warehouse Inventory',
                        'desc' => 'Buyers see real-time stock counts before placing bulk truckload orders.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>',
                        'title' => 'Automated Ledger Statements',
                        'desc' => 'Dealers download running account statement PDFs on demand anytime.'
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>',
                        'title' => 'Sales Rep Territory Chat',
                        'desc' => 'Connect area sales managers with regional stockists via unified team chat.'
                    ]
                ],
                'faqs' => [
                    [
                        'q' => 'Can we show different wholesale prices to different dealer tiers?',
                        'a' => 'Yes! InboxWa can identify verified dealers by their phone number and present their specific wholesale tier pricing and discount structure.'
                    ],
                    [
                        'q' => 'How does 1-click reordering work for retail stockists?',
                        'a' => 'Stockists receive a proactive replenishment alert. They tap "Repeat Last Order" and the PO is created in your ERP immediately with zero manual retyping.'
                    ],
                    [
                        'q' => 'Can dealers download ledger balance statements on WhatsApp?',
                        'a' => 'Yes. By connecting with your accounting system (e.g. Tally or Zoho Books), dealers can request their running ledger PDF anytime.'
                    ],
                    [
                        'q' => 'Does InboxWa support bulk container load inquiries?',
                        'a' => 'Yes. You can broadcast incoming container inventories and receive quote requests with custom MOQs.'
                    ]
                ],
                'cta_heading' => 'Scale Your B2B Wholesale &amp; Distribution Today',
                'cta_desc' => 'Automate bulk reorders, speed up dealer quote turnaround, and manage credit lines on WhatsApp with InboxWa.'
            ]

        ];
    }

    return $extended[$slug] ?? [
        'slug' => $slug,
        'breadcrumb_label' => ucwords(str_replace('-', ' ', $slug)),
        'title' => ucwords(str_replace('-', ' ', $slug)) . ' WhatsApp Automation | InboxWa',
        'meta_desc' => 'Supercharge your business with official WhatsApp Business API from InboxWa.',
        'kicker' => 'INDUSTRY MESSAGING ENGINE',
        'headline' => 'Scale Your Business <br><span class="highlight-text">on WhatsApp</span>',
        'lead' => 'Automate conversations, capture leads, and delight customers 24/7 with InboxWa Official WhatsApp Business API.',
        'chat_title' => 'InboxWa Assistant',
        'chat_messages' => [],
        'floating_metric' => ['value' => '3x Faster', 'label' => 'Lead Conversions'],
        'stats' => [],
        'use_cases' => [],
        'journey_steps' => [],
        'solutions' => [],
        'faqs' => [],
        'cta_heading' => 'Ready to Scale with InboxWa?',
        'cta_desc' => 'Get started with official WhatsApp Business API today.'
    ];
}

function getIndustryChips($slug) {
    $chipsMap = [
        'real-estate' => [
            '🏡 Book Site Visit',
            '📄 Brochure & Pricing',
            '📍 360° Virtual Tour',
            '💰 Downpayment & EMI',
            '📞 Talk to Advisor'
        ],
        'healthcare' => [
            '🩺 Book Doctor Appointment',
            '🧪 Lab Test Reports',
            '🏥 Emergency OP Timings',
            '💊 Prescription Refill',
            '📞 Talk to Clinic Support'
        ],
        'travel-hospitality' => [
            '✈️ Explore Holiday Packages',
            '🏨 Hotel & Villa Booking',
            '📋 Download Itinerary',
            '💳 Flight Web Check-in',
            '📞 Speak to Travel Agent'
        ],
        'beauty-wellness' => [
            '💆 Book Spa & Salon Slot',
            '📜 View Service Menu & Rates',
            '🎁 Check Loyalty Points',
            '✨ Festival Offers (20% OFF)',
            '📞 Talk to Reception'
        ],
        'ecommerce' => [
            '📦 Track My Order',
            '🛒 Abandoned Cart Recovery',
            '💳 COD Confirmation',
            '🔄 Return & Exchange',
            '📞 Live Customer Support'
        ],
        'automotive' => [
            '🚗 Book Home Test Drive',
            '💰 Get On-Road Price Quote',
            '🔧 Book Car Service',
            '📄 Download Brochure & Specs',
            '📞 Speak to Sales Advisor'
        ],
        'restaurants-food' => [
            '🍽️ Reserve a Table',
            '📜 View Digital Menu',
            '🛵 Track Food Order',
            '🎉 Book Party / Catering',
            '📞 Call Restaurant'
        ],
        'manufacturing' => [
            '🏭 Request Bulk RFQ Quote',
            '📄 Technical Spec Sheets',
            '📦 Track Factory Dispatch',
            '💼 Dealer Credit & Ledger',
            '📞 Talk to Plant Engineer'
        ],
        'events-wedding' => [
            '🎉 RSVP & Get Entry QR',
            '📍 Venue Location & Map',
            '📅 Event Schedule & Itinerary',
            '🏨 Guest Accommodation Info',
            '📞 Contact Event Coordinator'
        ],
        'digital-marketing' => [
            '📈 Agency Partner Program',
            '🏷️ White-Label Reseller Portal',
            '📢 Click-to-WhatsApp Ads ROI',
            '⚡ Multi-Tenant Client Setup',
            '📞 Schedule Agency Demo'
        ],
        'it-software' => [
            '⚡ Get API Key & Sandbox',
            '🔐 WhatsApp OTP & 2FA Setup',
            '🔄 Webhook Event Triggers',
            '📊 High-Volume Enterprise SLA',
            '📞 Speak to Solutions Architect'
        ],
        'retail' => [
            '🏬 In-Store Stock Check',
            '🎁 Check Loyalty Points',
            '🏷️ Weekend Store Offers',
            '📍 Store Locator & Hours',
            '📞 Contact Store Associate'
        ],
        'professional-services' => [
            '💼 Schedule Consultation',
            '📄 Secure Document Upload',
            '⚖️ Fee Structure & Retainers',
            '🔒 NDA & Confidentiality',
            '📞 Speak to Senior Partner'
        ],
        'b2b-suppliers' => [
            '📦 Repeat Last Bulk Order',
            '💰 View Wholesale Rate Sheet',
            '📄 Download Ledger Statement',
            '🚚 Live Shipment Dispatch',
            '📞 Speak to Account Manager'
        ]
    ];
    return $chipsMap[$slug] ?? [
        '💰 See Pricing',
        '🤖 How AI Works',
        '📢 Send Broadcasts',
        '⚡ 0% Ban Guarantee',
        '📞 Book Live Demo'
    ];
}

