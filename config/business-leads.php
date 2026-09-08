<?php
/**
 * 16 Verified Business Leads Categories Configuration
 * Data definitions for hub and dedicated category landing pages
 */

function get_all_business_leads_categories() {
    return [
        'real-estate' => [
            'slug' => 'real-estate',
            'name' => 'Real Estate',
            'emoji' => '🏠',
            'color' => '#2563eb',
            'color_light' => 'rgba(37, 99, 235, 0.1)',
            'icon_class' => 'mega-icon-blue',
            'badge' => 'REAL ESTATE BUSINESS LEADS & AUTOMATION',
            'subtitle' => 'Builders, developers, brokers, property consultants and real estate businesses.',
            'hero_title' => 'Turn Property Enquiries Into <span class="grad-text">Site Visits & Closed Deals</span>',
            'hero_desc' => 'Connect with verified property buyers, builders, real estate consultants and brokers. Accelerate your property bookings with 100% verified mobile numbers and automated WhatsApp qualification workflows.',
            'stats' => [
                ['850K+', 'Verified Property Leads'],
                ['99.2%', 'WhatsApp Delivery Rate'],
                ['4.8x', 'Higher Site Visit Ratio'],
                ['0.8s', 'AI Trigger Response']
            ],
            'chat_sim' => [
                'bot_name' => 'InboxWa Realty AI',
                'bot_status' => 'Verified Property Assistant Active',
                'avatar' => '🏠',
                'messages' => [
                    ['type' => 'user', 'text' => 'Hi, I saw your 3BHK luxury apartment project in Whitefield.'],
                    ['type' => 'bot', 'text' => 'Hello! Welcome to Godrej Woods. We have 3BHK premium residences starting at ₹1.45 Cr with private balconies and 40+ amenities. Would you like to view the floor plans or schedule a site visit?'],
                    ['type' => 'user', 'text' => 'Can I schedule a site visit this Saturday at 2 PM?'],
                    ['type' => 'bot', 'text' => '✅ Confirmed! Site visit booked for Saturday at 2:00 PM. We\'ve shared the location pin and sales manager contact. See you there!']
                ],
                'floats' => [
                    ['New Property Inquiry', '₹1.5 Cr+ Budget'],
                    ['Site Visit Scheduled', 'Saturday 2:00 PM'],
                    ['Lead Qualified', 'High Buyer Intent']
                ]
            ],
            'datasets' => [
                [
                    'title' => 'Builders & Real Estate Developers Directory',
                    'count' => '45,000+ Verified Contacts',
                    'coverage' => 'Pan-India (Tier 1 & 2 Metro Cities)',
                    'fields' => ['Company Name', 'Director / MD Name', 'Direct Mobile', 'Registered Email', 'RERA Reg No.', 'City / State'],
                    'audience' => 'B2B Suppliers, Architects, Construction Materials, Project Consultants'
                ],
                [
                    'title' => 'Active High-Net-Worth Property Buyers',
                    'count' => '120,000+ Opt-in Buyers',
                    'coverage' => 'Mumbai, Delhi NCR, Bangalore, Pune, Hyderabad',
                    'fields' => ['Buyer Name', 'Verified WhatsApp Number', 'Budget Range (₹1Cr - ₹5Cr+)', 'Preferred Location', 'Investment Intent'],
                    'audience' => 'Luxury Real Estate Developers, Premium Project Marketers, Wealth Managers'
                ],
                [
                    'title' => 'Real Estate Brokers & Property Consultants',
                    'count' => '85,000+ Direct Channel Partners',
                    'coverage' => 'Top 25 Commercial Hubs',
                    'fields' => ['Agency Name', 'Key Broker Name', 'Phone Number', 'Operating Micro-market', 'RERA Agent ID'],
                    'audience' => 'Developers Expanding Channel Partner Networks, Commercial Leasing Teams'
                ]
            ],
            'journey' => [
                [
                    'step' => '01',
                    'phase' => 'Discovery & Lead Extraction',
                    'time' => '⏱️ Instant Access',
                    'title' => 'Select Target Micro-Markets & Filter Verified Property Leads',
                    'desc' => 'Filter by state, city, ticket size, or buyer intent. Instantly download or stream high-intent property leads directly into your InboxWa CRM pipeline.',
                    'you_do' => [
                        'Choose preferred cities (e.g. Bangalore, Mumbai, Gurgaon)',
                        'Select dataset category: Builders, Channel Partners, or Active Buyers',
                        'Instantly preview sample records with verified phone numbers'
                    ],
                    'how_it_works' => [
                        'Real-time WhatsApp API phone validation filters out dead or inactive numbers',
                        'Automatic deduplication ensures zero repeated or expired contact records'
                    ],
                    'kpi' => '🎯 99.4% Verified Mobile Accuracy',
                    'image' => 'assets/images/journey/wa-step-1.jpg'
                ],
                [
                    'step' => '02',
                    'phase' => 'Instant WhatsApp Engagement',
                    'time' => '⚡ 0.8s Automated Trigger',
                    'title' => 'Deploy Interactive WhatsApp Brochures & AI Lead Qualification',
                    'desc' => 'Send interactive WhatsApp messages with project brochures, video walkthroughs, and click-to-book buttons. Qualify buyer budget and timelines 24/7 without manual calls.',
                    'you_do' => [
                        'Upload project e-brochure and virtual walkthrough links',
                        'Set qualifying questions (Budget, Location, Timeline to Buy)',
                        'Enable instant calendar booking for physical site visits'
                    ],
                    'how_it_works' => [
                        'AI bot engages leads in natural language and identifies urgent buyers',
                        'Hot leads with high budget are instantly routed to senior sales consultants'
                    ],
                    'kpi' => '🤖 4.2x Faster Response Time',
                    'image' => 'assets/images/journey/wa-step-2.jpg'
                ],
                [
                    'step' => '03',
                    'phase' => 'Site Visit Bookings & Conversions',
                    'time' => '📈 24/7 Deal Pipeline',
                    'title' => 'Automate Site Visit Reminders, Location Pins & Post-Visit Closing',
                    'desc' => 'Ensure 95%+ site visit attendance with automated Google Maps location sharing, cab ride assistance, and scheduled WhatsApp follow-up reminders.',
                    'you_do' => [
                        'Review scheduled visits on your shared multi-agent team dashboard',
                        'Send one-click visit confirmations and sales executive details',
                        'Trigger post-visit price quotes and limited-period discounts'
                    ],
                    'how_it_works' => [
                        'Automated reminder sequence fires at 24 hours and 2 hours before scheduled visit',
                        'Complete conversation history syncs directly with Salesforce, HubSpot, or Google Sheets'
                    ],
                    'kpi' => '🏆 92% Site Visit Attendance Rate',
                    'image' => 'assets/images/journey/wa-step-3.jpg'
                ]
            ],
            'problems' => [
                ['title' => 'Ghost Inquiries & Fake Numbers', 'desc' => 'Real estate portals flood developers with fake or inactive phone numbers, wasting 60% of agent calling time.'],
                ['title' => 'Missed Follow-ups & Delayed Responses', 'desc' => 'Buyers contact 4-5 properties simultaneously. Delayed replies mean they book with competing builders.'],
                ['title' => 'No-Shows for Scheduled Site Visits', 'desc' => 'Leads book visits on weekends but forget or fail to show up without timely reminders and directions.'],
                ['title' => 'Unorganized Broker Communication', 'desc' => 'Channel partner updates are scattered across personal WhatsApp chats, causing commission disputes.']
            ],
            'solutions' => [
                ['title' => '100% WhatsApp-Verified Numbers', 'desc' => 'Every lead is pre-checked on WhatsApp before delivery, ensuring zero wasted calls and direct message delivery.'],
                ['title' => 'Instant AI Qualification Bot', 'desc' => 'Engages property seekers within 3 seconds, shares brochures, and filters serious buyers by budget and timeline.'],
                ['title' => 'Automated GPS Location & Reminders', 'desc' => 'Sends location pins and polite WhatsApp reminders before visits, slashing no-shows by 75%.'],
                ['title' => 'Multi-Agent Shared Inbox', 'desc' => 'Centralizes all lead interactions under one official business number with role-based access and audit logs.']
            ]
        ],

        'education' => [
            'slug' => 'education',
            'name' => 'Education',
            'emoji' => '🎓',
            'color' => '#10b981',
            'color_light' => 'rgba(16, 185, 129, 0.1)',
            'icon_class' => 'mega-icon-green',
            'badge' => 'EDUCATION BUSINESS LEADS & ENROLLMENT AUTOMATION',
            'subtitle' => 'Schools, colleges, coaching institutes, training centres and education businesses.',
            'hero_title' => 'Scale Student Admissions With <span class="grad-text">Verified Education Leads</span>',
            'hero_desc' => 'Reach aspiring students, parents, school principals, and coaching institute owners. Automate admission inquiries, brochure delivery, and entrance exam counseling on official WhatsApp Business API.',
            'stats' => [
                ['650K+', 'Student & Institute Contacts'],
                ['98.9%', 'Message Read Rate'],
                ['3.5x', 'Higher Admission Inquiries'],
                ['Instant', 'Course Fee & Syllabus Delivery']
            ],
            'chat_sim' => [
                'bot_name' => 'InboxWa EduDesk',
                'bot_status' => 'Admissions Counselor Active',
                'avatar' => '🎓',
                'messages' => [
                    ['type' => 'user', 'text' => 'Hi, what are the eligibility criteria and fees for the Data Science Diploma?'],
                    ['type' => 'bot', 'text' => 'Hello! Our 6-month Data Science & AI Certification is open to graduates with 50%+ aggregate. Fee is ₹45,000 (EMI starting at ₹4,500/mo). Would you like the curriculum PDF or a free demo counseling session?'],
                    ['type' => 'user', 'text' => 'Please share the syllabus PDF.'],
                    ['type' => 'bot', 'text' => '📄 Sent! Here is the complete curriculum PDF. Our academic counselor is available tomorrow at 4 PM for a 1-on-1 Q&A. Should I book your slot?']
                ],
                'floats' => [
                    ['Admission Enquiry', 'Data Science & AI'],
                    ['Counseling Booked', 'Tomorrow 4:00 PM'],
                    ['Syllabus PDF', 'Delivered Instantly']
                ]
            ],
            'datasets' => [
                [
                    'title' => 'K-12 Schools, Principals & Trustees Directory',
                    'count' => '32,000+ Verified Institutions',
                    'coverage' => 'Pan-India All States & Boards (CBSE, ICSE, State)',
                    'fields' => ['School Name', 'Principal / Trustee Name', 'Direct Mobile', 'School Email', 'Board Affiliation', 'Student Strength'],
                    'audience' => 'EdTech Platforms, Publishing Houses, School ERP Vendors, Lab Equipment Suppliers'
                ],
                [
                    'title' => 'Coaching Institutes & Test Prep Centers',
                    'count' => '48,000+ Centers',
                    'coverage' => 'Kota, Delhi, Hyderabad, Pune, Patna, Bangalore & Tier 2 Hubs',
                    'fields' => ['Institute Name', 'Owner / Center Head', 'Mobile Number', 'Exam Specialization (JEE, NEET, UPSC)', 'City'],
                    'audience' => 'Test Series Providers, Education Software, Study Material Publishers'
                ],
                [
                    'title' => 'Higher Education & College Student Applicants',
                    'count' => '150,000+ Verified Aspirants',
                    'coverage' => 'Major Education Clusters',
                    'fields' => ['Student Name', 'Verified WhatsApp Number', 'Desired Course (Engineering, MBA, Medical)', 'Graduation Year'],
                    'audience' => 'Private Universities, Study Abroad Consultants, Skill Development Academies'
                ]
            ],
            'journey' => [
                [
                    'step' => '01',
                    'phase' => 'Targeted Student Outreach',
                    'time' => '⏱️ Fast Setup',
                    'title' => 'Filter Students & Institutes by Geography and Course Interest',
                    'desc' => 'Access verified directories of school decision-makers or course applicants segmented by state, stream, and academic year.',
                    'you_do' => [
                        'Choose candidate profiles: School Trustees, Coaching Owners, or Students',
                        'Select streams: Engineering, Medical, Management, or Study Abroad',
                        'Download verified contact lists with mobile numbers'
                    ],
                    'how_it_works' => [
                        'Numbers are scrubbed against WhatsApp active directory',
                        'Student opt-ins comply with education communication standards'
                    ],
                    'kpi' => '🎯 98.7% Verified WhatsApp Contacts',
                    'image' => 'assets/images/journey/wa-step-1.jpg'
                ],
                [
                    'step' => '02',
                    'phase' => 'Automated Admission Flow',
                    'time' => '⚡ 24/7 AI Counselor',
                    'title' => 'Deploy WhatsApp Chatbot for Fee Inquiries, Syllabus & Eligibility',
                    'desc' => 'Let an automated WhatsApp counselor answer repetitive questions about fees, scholarship tests, and batch timings around the clock.',
                    'you_do' => [
                        'Upload syllabus PDFs, brochure documents, and sample test papers',
                        'Configure interactive buttons for course selection and fee plans',
                        'Integrate appointment booking for career counseling webinars'
                    ],
                    'how_it_works' => [
                        'Bot sends instant PDF files directly into the student\'s WhatsApp chat',
                        'Captures student qualification and passes hot leads to human counselors'
                    ],
                    'kpi' => '⚡ 3-Second Average Inquiry Response',
                    'image' => 'assets/images/journey/wa-step-2.jpg'
                ],
                [
                    'step' => '03',
                    'phase' => 'Enrollment & Fee Collection',
                    'time' => '🎓 High Conversion',
                    'title' => 'Broadcast Entrance Dates, Reminders & Instant Payment Links',
                    'desc' => 'Send broadcast alerts with entrance exam dates, admit cards, and Razorpay/Stripe WhatsApp payment links to confirm seats instantly.',
                    'you_do' => [
                        'Broadcast deadline alerts to parents and prospective students',
                        'Send personalized admission offer letters with payment links',
                        'Track fee payments and receipts in real time'
                    ],
                    'how_it_works' => [
                        'Meta-approved admission templates achieve 98% open rates',
                        'Payment webhooks automatically update student enrollment status in your CRM'
                    ],
                    'kpi' => '🚀 42% Increase in Enrollment Rates',
                    'image' => 'assets/images/journey/wa-step-3.jpg'
                ]
            ],
            'problems' => [
                ['title' => 'Overwhelming Admission Inquiries', 'desc' => 'Phone lines are jammed during admission seasons with repetitive questions about fee structures and seats.'],
                ['title' => 'Unread Emails & Lost Applications', 'desc' => 'Prospectuses and admission brochures sent via email sit unopened in spam folders with under 15% open rates.'],
                ['title' => 'Delayed Counseling Follow-ups', 'desc' => 'Students apply to multiple colleges simultaneously; delaying counseling calls results in lost seat bookings.'],
                ['title' => 'Manual Fee Follow-up Hassle', 'desc' => 'Institutes struggle with manual calling and reminders to collect quarterly tuition fees and registration deposits.']
            ],
            'solutions' => [
                ['title' => 'Instant WhatsApp FAQ Bot', 'desc' => 'Resolves 85% of admission questions instantly on WhatsApp, sharing fee structures and eligibility 24/7.'],
                ['title' => 'Direct WhatsApp Brochure Delivery', 'desc' => 'Delivers high-res prospectuses directly into student chats with 98% open rates and immediate engagement.'],
                ['title' => '1-Click Counseling Scheduler', 'desc' => 'Enables prospective students to book counseling slots on Zoom or campus directly through WhatsApp buttons.'],
                ['title' => 'Automated Fee Reminders & Payment Links', 'desc' => 'Collects tuition fees with UPI and payment gateway links directly in WhatsApp, generating instant receipts.']
            ]
        ],

        'healthcare' => [
            'slug' => 'healthcare',
            'name' => 'Healthcare',
            'emoji' => '🏥',
            'color' => '#ec4899',
            'color_light' => 'rgba(236, 72, 153, 0.1)',
            'icon_class' => 'mega-icon-pink',
            'badge' => 'HEALTHCARE BUSINESS DATA & CLINIC AUTOMATION',
            'subtitle' => 'Hospitals, clinics, diagnostic centres, wellness and healthcare businesses.',
            'hero_title' => 'Grow Your Clinic & Healthcare Network With <span class="grad-text">Verified Leads</span>',
            'hero_desc' => 'Reach practicing doctors, clinic owners, hospital administrators, and diagnostic centers. Streamline doctor appointments, lab test report delivery, and patient communication on verified WhatsApp.',
            'stats' => [
                ['520K+', 'Doctors & Clinics Database'],
                ['99.5%', 'Appointment Confirmation'],
                ['68%', 'Drop in Patient No-Shows'],
                ['Instant', 'Lab Report Dispatch']
            ],
            'chat_sim' => [
                'bot_name' => 'InboxWa HealthDesk',
                'bot_status' => 'Clinic Appointment Assistant',
                'avatar' => '🏥',
                'messages' => [
                    ['type' => 'user', 'text' => 'Hi, I would like to book a dental checkup consultation for tomorrow.'],
                    ['type' => 'bot', 'text' => 'Hello! Dr. Sharma (Orthodontist) is available tomorrow at 11:30 AM or 4:00 PM at our Indiranagar clinic. Which time slot suits you?'],
                    ['type' => 'user', 'text' => '11:30 AM works for me.'],
                    ['type' => 'bot', 'text' => '✅ Appointment confirmed for tomorrow at 11:30 AM! Here is the clinic Google Maps location. Please arrive 10 minutes early.']
                ],
                'floats' => [
                    ['Dental Appointment', 'Tomorrow 11:30 AM'],
                    ['Doctor Assigned', 'Dr. Sharma (Orthodontist)'],
                    ['Report Ready', 'PDF Available on WhatsApp']
                ]
            ],
            'datasets' => [
                [
                    'title' => 'Practicing Doctors & Medical Specialists Directory',
                    'count' => '180,000+ Verified Doctors',
                    'coverage' => 'Pan-India by Specialty (Cardio, Dental, Ortho, Neuro, etc.)',
                    'fields' => ['Doctor Name', 'Specialty', 'Clinic / Hospital Name', 'Direct Mobile', 'City', 'Medical Council Reg'],
                    'audience' => 'Pharma Companies, Medical Devices, HealthTech Startups, CME Organizers'
                ],
                [
                    'title' => 'Private Hospitals & Multispecialty Clinics',
                    'count' => '45,000+ Healthcare Facilities',
                    'coverage' => 'All Major Metros & District Headquarters',
                    'fields' => ['Hospital Name', 'Bed Capacity', 'Medical Superintendent / Admin Contact', 'Phone', 'Address'],
                    'audience' => 'Hospital Equipment Suppliers, Surgical Consumables, Hospital Management Software'
                ],
                [
                    'title' => 'Diagnostic Centers & Pathology Laboratories',
                    'count' => '28,000+ Labs & Scan Centers',
                    'coverage' => 'Pan-India',
                    'fields' => ['Lab Name', 'Managing Pathologist', 'Mobile Number', 'Accreditation (NABL / NABH)', 'City'],
                    'audience' => 'Diagnostic Reagents, Imaging Equipment, Health Packages Aggregators'
                ]
            ],
            'journey' => [
                [
                    'step' => '01',
                    'phase' => 'Healthcare Network Targeting',
                    'time' => '⏱️ Instant Access',
                    'title' => 'Filter Healthcare Providers by Medical Specialty & City',
                    'desc' => 'Access verified directories of practicing doctors, clinic founders, and hospital procurement heads filtered by medical department.',
                    'you_do' => [
                        'Select medical category: Doctors, Polyclinics, or Diagnostic Centers',
                        'Filter by specialty (e.g. Dentists, Pediatricians, Dermatologists)',
                        'Download clean lists with verified phone numbers'
                    ],
                    'how_it_works' => [
                        'Verification algorithms validate official clinic registration and active phone lines',
                        'Zero junk data with up-to-date practice addresses'
                    ],
                    'kpi' => '🎯 99.1% Healthcare Directory Accuracy',
                    'image' => 'assets/images/journey/wa-step-1.jpg'
                ],
                [
                    'step' => '02',
                    'phase' => 'Appointment & Tele-Consult Bot',
                    'time' => '⚡ 24/7 Booking Assistant',
                    'title' => 'Automate Patient Appointments & Doctor Consultation Schedules',
                    'desc' => 'Let patients book consultations, view doctor availability, and receive appointment tokens directly via interactive WhatsApp menus.',
                    'you_do' => [
                        'Configure doctor schedules and consultation fee structures',
                        'Enable automated token numbers and waiting time updates',
                        'Sync with your clinic management or EHR software'
                    ],
                    'how_it_works' => [
                        'Patient selects date and time slot with one tap',
                        'Calendar synchronizes instantly and blocks double-booking'
                    ],
                    'kpi' => '⚡ 65% Reduction in Reception Call Volume',
                    'image' => 'assets/images/journey/wa-step-2.jpg'
                ],
                [
                    'step' => '03',
                    'phase' => 'Automated Reports & Follow-ups',
                    'time' => '🔒 HIPAA / GDPR Compliant',
                    'title' => 'Deliver Secure Diagnostic PDF Reports & Preventive Care Alerts',
                    'desc' => 'Send encrypted test reports and post-treatment follow-up instructions directly to the patient\'s WhatsApp within minutes of lab sign-off.',
                    'you_do' => [
                        'Connect LIS (Laboratory Information System) with WhatsApp API',
                        'Automate blood test & scan report dispatch',
                        'Schedule routine health checkup and medicine refill reminders'
                    ],
                    'how_it_works' => [
                        'Secure end-to-end encrypted PDF delivery ensures patient data privacy',
                        'Automated reminder sequence slashes consultation no-shows to under 4%'
                    ],
                    'kpi' => '📉 72% Drop in Patient Follow-up No-Shows',
                    'image' => 'assets/images/journey/wa-step-3.jpg'
                ]
            ],
            'problems' => [
                ['title' => 'High Rate of Patient No-Shows', 'desc' => 'Clinics lose up to 30% of daily revenue when patients fail to show up for scheduled consultation slots.'],
                ['title' => 'Front Desk Overloaded with Routine Calls', 'desc' => 'Reception staff spend all day answering repetitive questions about clinic timings, doctor availability, and directions.'],
                ['title' => 'Delayed Lab Report Delivery', 'desc' => 'Patients have to physically travel back to the diagnostic center or check clogged email inboxes for test results.'],
                ['title' => 'Lack of Post-Treatment Follow-up', 'desc' => 'Clinics miss opportunities to re-engage patients for follow-up visits, chronic medication refills, and dental checkups.']
            ],
            'solutions' => [
                ['title' => 'Automated Appointment Reminders', 'desc' => 'Sends gentle WhatsApp reminders with Google Map directions 2 hours prior, slashing no-shows by 68%.'],
                ['title' => '24/7 WhatsApp Virtual Receptionist', 'desc' => 'Answers patient inquiries about doctor availability, fees, and addresses instantly without human staff.'],
                ['title' => '1-Click Instant PDF Report Delivery', 'desc' => 'Automatically delivers diagnostic reports directly to the patient\'s WhatsApp as soon as tests are signed off.'],
                ['title' => 'Automated Patient Wellness Reminders', 'desc' => 'Triggers preventive health checkup campaigns, annual checkup alerts, and medicine refill reminders.']
            ]
        ],

        'ecommerce' => [
            'slug' => 'ecommerce',
            'name' => 'E-commerce',
            'emoji' => '🛍️',
            'color' => '#8b5cf6',
            'color_light' => 'rgba(139, 92, 246, 0.1)',
            'icon_class' => 'mega-icon-purple',
            'badge' => 'E-COMMERCE BUSINESS DATA & WHATSAPP COMMERCE',
            'subtitle' => 'Online stores, D2C brands, retailers and e-commerce businesses.',
            'hero_title' => 'Recover Abandoned Carts & Boost <span class="grad-text">D2C Sales on WhatsApp</span>',
            'hero_desc' => 'Target high-growth online stores, D2C brand founders, Shopify merchants, and active online shoppers. Turn WhatsApp into your #1 revenue channel with automated cart recovery, catalog browsing, and COD verification.',
            'stats' => [
                ['720K+', 'D2C Brands & Shopper Data'],
                ['33%', 'Abandoned Cart Recovery'],
                ['45%', 'Drop in COD RTO (Returns)'],
                ['98%', 'Order Update Read Rate']
            ],
            'chat_sim' => [
                'bot_name' => 'InboxWa D2C Store',
                'bot_status' => 'AI Shopping Assistant',
                'avatar' => '🛍️',
                'messages' => [
                    ['type' => 'user', 'text' => 'Hi, I left the Waterproof Hiking Jacket in my cart.'],
                    ['type' => 'bot', 'text' => 'Hey Alex! Your Waterproof Hiking Jacket (Size L) is reserved. Complete your checkout in the next 30 minutes with code FLASH15 for an extra 15% off + Free Shipping! 🎁'],
                    ['type' => 'user', 'text' => 'Applying discount now!'],
                    ['type' => 'bot', 'text' => '🎉 Order #9842 confirmed! We\'re preparing your package for shipment. Track live updates right here on WhatsApp.']
                ],
                'floats' => [
                    ['Cart Recovered', '15% Discount Applied'],
                    ['Order Confirmed', 'Order #9842 in Transit'],
                    ['COD Verified', 'Zero RTO Risk']
                ]
            ],
            'datasets' => [
                [
                    'title' => 'Shopify & WooCommerce D2C Brand Owners',
                    'count' => '65,000+ Direct Founders',
                    'coverage' => 'Pan-India & Global E-commerce Hubs',
                    'fields' => ['Store Name', 'Founder / E-comm Head', 'Store URL', 'Monthly Revenue Band', 'Direct Mobile', 'Category (Fashion, Beauty, Electronics)'],
                    'audience' => 'Performance Marketing Agencies, Logistics Providers, SaaS Apps, Payment Gateways'
                ],
                [
                    'title' => 'Active Online Shoppers & Repeat Buyers',
                    'count' => '250,000+ Opt-in Buyers',
                    'coverage' => 'Tier 1 & Tier 2 Cities',
                    'fields' => ['Customer Name', 'Verified WhatsApp Number', 'Preferred Category', 'Average Order Value Band', 'City'],
                    'audience' => 'D2C Brands Scaling Lookalike Campaigns, Retail Brands, Subscription Boxes'
                ],
                [
                    'title' => 'Amazon & Flipkart Top Marketplace Sellers',
                    'count' => '42,000+ Verified Sellers',
                    'coverage' => 'Major Logistics Hubs',
                    'fields' => ['Seller Name', 'Brand Name', 'Category', 'Mobile Number', 'GST Registered Address'],
                    'audience' => 'Packaging Manufacturers, Inventory Financing, Cross-border Logistics'
                ]
            ],
            'journey' => [
                [
                    'step' => '01',
                    'phase' => 'Brand & Consumer Targeting',
                    'time' => '⏱️ Quick Setup',
                    'title' => 'Access Verified D2C Store Owners & Active Shopper Audiences',
                    'desc' => 'Target fast-growing direct-to-consumer brands or segment consumer audiences based on shopping frequency and average ticket size.',
                    'you_do' => [
                        'Choose merchant category: Fashion, Beauty, Electronics, or Home Goods',
                        'Filter by store platform (Shopify, WooCommerce, Custom Store)',
                        'Export verified mobile numbers for direct partnership or B2B sales'
                    ],
                    'how_it_works' => [
                        'Real-time store tech-stack detection confirms active e-commerce platforms',
                        'All contacts verified against active WhatsApp business profiles'
                    ],
                    'kpi' => '🎯 99.3% Active Store Verification',
                    'image' => 'assets/images/journey/wa-step-1.jpg'
                ],
                [
                    'step' => '02',
                    'phase' => 'Cart Recovery & COD Verification',
                    'time' => '⚡ Automated Flows',
                    'title' => 'Trigger Automated Cart Recovery & Cash-on-Delivery Confirmation',
                    'desc' => 'Recover lost checkouts automatically within 15 minutes. Verify COD orders with interactive 1-tap WhatsApp buttons to eliminate RTO fraud.',
                    'you_do' => [
                        'Connect Shopify / WooCommerce store in 60 seconds with API key',
                        'Set discount incentives for abandoned cart reminders (e.g. 10% off)',
                        'Enable 1-tap WhatsApp COD address & phone confirmation buttons'
                    ],
                    'how_it_works' => [
                        'Smart trigger fires cart reminders with dynamic product images and checkout links',
                        'Unconfirmed or suspicious COD orders are paused, preventing bogus shipping costs'
                    ],
                    'kpi' => '🛒 33% Average Cart Recovery Rate',
                    'image' => 'assets/images/journey/wa-step-2.jpg'
                ],
                [
                    'step' => '03',
                    'phase' => 'Post-Purchase & Re-Order Retention',
                    'time' => '🚀 2.8x LTV Increase',
                    'title' => 'Send Real-time Shipping Tracking & Automated Re-Purchase Broadcasts',
                    'desc' => 'Keep customers delighted with live courier tracking updates, delivery confirmation, and tailored replenishment alerts that drive repeat sales.',
                    'you_do' => [
                        'Integrate Shiprocket, Delhivery, or BlueDart for live tracking sync',
                        'Send automated dispatch, out-for-delivery, and delivered alerts',
                        'Schedule product replenishment alerts (e.g. 30 days after skincare purchase)'
                    ],
                    'how_it_works' => [
                        'Customers track courier status without visiting carrier websites',
                        'Personalized recommendation engine suggests matching cross-sell products'
                    ],
                    'kpi' => '📈 45% Slash in Customer Support Queries',
                    'image' => 'assets/images/journey/wa-step-3.jpg'
                ]
            ],
            'problems' => [
                ['title' => '70%+ Abandoned Cart Rate', 'desc' => 'Online shoppers add items to cart and bounce. Email recovery emails are ignored with dismal 8% open rates.'],
                ['title' => 'Massive Losses from COD Returns (RTO)', 'desc' => 'Up to 35% of cash-on-delivery orders are returned because customers give wrong addresses or change their mind.'],
                ['title' => 'Endless "Where Is My Order?" Queries', 'desc' => 'Customer support desks are overwhelmed with repetitive order tracking and delivery status tickets.'],
                ['title' => 'Low Customer Retention & Lifetime Value', 'desc' => 'Acquisition costs on Meta and Google Ads are rising; brands struggle to bring buyers back for repeat orders.']
            ],
            'solutions' => [
                ['title' => 'High-Conversion WhatsApp Cart Recovery', 'desc' => 'Delivers rich media WhatsApp cart recovery messages with product images, yielding up to 33% recovered revenue.'],
                ['title' => '1-Click WhatsApp COD Confirmation', 'desc' => 'Verifies customer address and intent via interactive WhatsApp buttons before shipping, slashing RTO by 45%.'],
                ['title' => 'Automated Live Tracking Notifications', 'desc' => 'Automatically pushes dispatched, out-for-delivery, and delivered updates, cutting tracking tickets by 60%.'],
                ['title' => 'Automated Re-Purchase Broadcasts', 'desc' => 'Triggers smart replenishment reminders and exclusive VIP offers based on past order intervals.']
            ]
        ],

        'finance-insurance' => [
            'slug' => 'finance-insurance',
            'name' => 'Finance & Insurance',
            'emoji' => '💰',
            'color' => '#d97706',
            'color_light' => 'rgba(217, 119, 6, 0.1)',
            'icon_class' => 'mega-icon-amber',
            'badge' => 'BFSI & INSURANCE BUSINESS LEADS',
            'subtitle' => 'Financial services, insurance agencies, consultants and related businesses.',
            'hero_title' => 'Capture High-Intent Borrowers & <span class="grad-text">Insurance Policy Leads</span>',
            'hero_desc' => 'Target high-net-worth investors, loan seekers, insurance agency principals, and financial advisors. Automate policy renewal reminders, KYC document collection, and loan eligibility checks on secure WhatsApp.',
            'stats' => [
                ['580K+', 'BFSI & Policyholder Leads'],
                ['94%', 'On-Time Policy Renewals'],
                ['3.8x', 'Higher Loan Conversions'],
                ['Bank-Grade', '256-bit Encrypted Workflows']
            ],
            'chat_sim' => [
                'bot_name' => 'InboxWa FinDesk',
                'bot_status' => 'Verified BFSI Assistant',
                'avatar' => '💰',
                'messages' => [
                    ['type' => 'user', 'text' => 'Hi, I need a business loan of ₹25 Lakhs for working capital.'],
                    ['type' => 'bot', 'text' => 'Hello! We offer collateral-free business loans up to ₹50 Lakhs with interest rates starting at 10.5% p.a. May I know your business vintage (years in operation) and monthly turnover?'],
                    ['type' => 'user', 'text' => '4 years in operation, monthly turnover is ₹12 Lakhs.'],
                    ['type' => 'bot', 'text' => '🎉 Excellent! You are pre-approved for up to ₹30 Lakhs. Please upload your last 6 months bank statement PDF here to generate your instant sanction letter.']
                ],
                'floats' => [
                    ['Loan Pre-Approved', '₹30 Lakhs Sanctioned'],
                    ['Instant KYC', 'Bank Statement Uploaded'],
                    ['Policy Renewal', 'Premium Paid via UPI']
                ]
            ],
            'datasets' => [
                [
                    'title' => 'Insurance Agents, Brokers & Surveyors Network',
                    'count' => '95,000+ Licensed Agents',
                    'coverage' => 'Pan-India (Life, Health & General Insurance)',
                    'fields' => ['Agent Name', 'Agency / Corporate Tie-up', 'Direct Mobile', 'City / Branch', 'Licensing Body'],
                    'audience' => 'InsurTech Startups, General Insurance Companies, TPA Software Providers'
                ],
                [
                    'title' => 'High-Net-Worth Individuals & Retail Investors',
                    'count' => '140,000+ Verified HNWIs',
                    'coverage' => 'Top 15 Wealth Hubs',
                    'fields' => ['Investor Name', 'Verified Phone', 'Annual Income Slab (₹25L+)', 'City', 'Investment Preference (MF, Equities, PMS)'],
                    'audience' => 'Wealth Management Firms, PMS Managers, Private Equity Advisory, Angel Networks'
                ],
                [
                    'title' => 'MSME Business Owners Seeking Working Capital Loans',
                    'count' => '110,000+ Verified MSMEs',
                    'coverage' => 'Industrial Clusters & Commercial Markets',
                    'fields' => ['Business Name', 'Proprietor Name', 'GST Registered Mobile', 'Turnover Range', 'Location'],
                    'audience' => 'NBFCs, FinTech Lenders, Loan DSA Agents, Merchant Cash Advance Providers'
                ]
            ],
            'journey' => [
                [
                    'step' => '01',
                    'phase' => 'BFSI Prospect Identification',
                    'time' => '⏱️ Instant Access',
                    'title' => 'Select Financial Profiles by Income Slab, Business Turnover & Geography',
                    'desc' => 'Filter leads by loan requirement, investment portfolio size, or licensed insurance advisor status with 100% phone verification.',
                    'you_do' => [
                        'Choose loan seekers, investment leads, or insurance agency owners',
                        'Filter by annual revenue bracket or ticket size',
                        'Download clean data with active WhatsApp numbers'
                    ],
                    'how_it_works' => [
                        'Rigorous financial data compliance safeguards opt-in integrity',
                        'Automated mobile verification ensures active phone lines'
                    ],
                    'kpi' => '🎯 98.9% Verified Phone Line Accuracy',
                    'image' => 'assets/images/journey/wa-step-1.jpg'
                ],
                [
                    'step' => '02',
                    'phase' => 'Instant KYC & Eligibility Bot',
                    'time' => '⚡ 60s Eligibility Check',
                    'title' => 'Automate Document Collection & Loan / Insurance Eligibility Calculations',
                    'desc' => 'Enable leads to upload Aadhaar, PAN, and Bank Statements directly in WhatsApp. Instantly calculate EMI and policy quotes.',
                    'you_do' => [
                        'Configure loan eligibility logic or premium calculation formulas',
                        'Enable secure media upload for PDF bank statements and identity proofs',
                        'Deploy interactive buttons for tenure and coverage selection'
                    ],
                    'how_it_works' => [
                        'OCR technology scans documents and auto-fills application forms',
                        'Pre-sanction letters are generated in real time as downloadable PDFs'
                    ],
                    'kpi' => '⚡ 85% Drop in Document Collection Delays',
                    'image' => 'assets/images/journey/wa-step-2.jpg'
                ],
                [
                    'step' => '03',
                    'phase' => 'Policy Renewals & Conversions',
                    'time' => '📈 94% Retention Rate',
                    'title' => 'Send Automated Policy Expiry Reminders & Instant UPI Payment Links',
                    'desc' => 'Ensure zero lapsed policies with timely WhatsApp renewal notices, policy PDF dispatch, and instant 1-click UPI payments.',
                    'you_do' => [
                        'Schedule renewal alerts 30, 15, and 3 days before policy lapse date',
                        'Attach updated policy schedule and claim settlement record',
                        'Embed UPI intent links for instant premium payment'
                    ],
                    'how_it_works' => [
                        'Payment webhooks trigger instant digital policy receipt generation',
                        'Lapsed policy risk drops by over 60% compared to postal mail or SMS'
                    ],
                    'kpi' => '🏆 94% On-time Premium Renewal Rate',
                    'image' => 'assets/images/journey/wa-step-3.jpg'
                ]
            ],
            'problems' => [
                ['title' => 'Lapsed Insurance Policies & Lost Renewals', 'desc' => 'SMS alerts are buried under spam; customers miss renewal deadlines, causing lost commission and dropped coverage.'],
                ['title' => 'Painfully Slow KYC & Document Drop-offs', 'desc' => 'Borrowers abandon loan applications when asked to submit paper photocopies or navigate complex web portals.'],
                ['title' => 'High Cost of Cold Calling Loan DSA Teams', 'desc' => 'Financial advisory teams waste thousands of hours cold-calling uninterested prospects with sub-2% conversion rates.'],
                ['title' => 'Unverified Contact Data & Fraud Inquiries', 'desc' => 'Unqualified leads with poor credit scores clog sales pipelines, wasting senior underwriter time.']
            ],
            'solutions' => [
                ['title' => 'Automated WhatsApp Policy Renewal Alerts', 'desc' => 'Sends interactive renewal notices with 1-click UPI payment links, maximizing policy retention.'],
                ['title' => 'Seamless In-Chat Document Collection', 'desc' => 'Allows borrowers to snap photos of ID and upload bank statements directly on WhatsApp with bank-grade encryption.'],
                ['title' => 'Targeted High-Intent Borrowers', 'desc' => 'Delivers pre-screened business owners and HNWIs actively seeking financial products.'],
                ['title' => 'Instant Automated Eligibility Calculator', 'desc' => 'Screens credit scores and turnover in chat within 30 seconds before handing qualified deals to underwriters.']
            ]
        ],

        'automotive' => [
            'slug' => 'automotive',
            'name' => 'Automotive',
            'emoji' => '🚗',
            'color' => '#0284c7',
            'color_light' => 'rgba(2, 132, 199, 0.1)',
            'icon_class' => 'mega-icon-cyan',
            'badge' => 'AUTOMOTIVE BUSINESS LEADS & DEALERSHIP WORKFLOWS',
            'subtitle' => 'Dealers, service centres, automobile businesses and automotive professionals.',
            'hero_title' => 'Drive Vehicle Sales & Service Bookings With <span class="grad-text">Automotive Leads</span>',
            'hero_desc' => 'Reach car dealerships, multi-brand workshops, spare parts distributors, and active car buyers. Automate test drive bookings, routine service reminders, and vehicle trade-in evaluations on WhatsApp.',
            'stats' => [
                ['480K+', 'Automotive & Buyer Contacts'],
                ['82%', 'Test Drive Show-Up Rate'],
                ['3.4x', 'More Workshop Service Bookings'],
                ['Instant', 'Brochure & Quotation Sharing']
            ],
            'chat_sim' => [
                'bot_name' => 'InboxWa AutoDrive',
                'bot_status' => 'Dealership Assistant Active',
                'avatar' => '🚗',
                'messages' => [
                    ['type' => 'user', 'text' => 'Hi, I want to book a test drive for the new Creta SX (O) Petrol Automatic.'],
                    ['type' => 'bot', 'text' => 'Hello! The new Creta SX (O) Automatic is available for test drive at our Flagship Showroom on MG Road, or we can bring the car to your doorstep! Which do you prefer?'],
                    ['type' => 'user', 'text' => 'Doorstep test drive on Sunday at 11 AM.'],
                    ['type' => 'bot', 'text' => '✅ Done! Our product specialist will arrive with the vehicle on Sunday at 11:00 AM. We\'ve shared his contact details. Please keep your driving license handy.']
                ],
                'floats' => [
                    ['Test Drive Booked', 'Doorstep • Sunday 11 AM'],
                    ['Trade-in Valued', 'Estimated ₹4.2 Lakhs'],
                    ['Service Reminder', 'Periodic Maintenance Due']
                ]
            ],
            'datasets' => [
                [
                    'title' => 'Authorized Car & Bike Dealerships (OEM Networks)',
                    'count' => '24,000+ Dealership Principals',
                    'coverage' => 'Pan-India Across All Major Brands (Maruti, Hyundai, Tata, Honda, etc.)',
                    'fields' => ['Dealership Name', 'OEM Brand', 'Dealer Principal / GM Name', 'Direct Mobile', 'City / District'],
                    'audience' => 'Automotive Software, Lubricant Companies, Auto Accessories, Insurance Brokers'
                ],
                [
                    'title' => 'Independent Multi-Brand Workshops & Garages',
                    'count' => '55,000+ Service Centers',
                    'coverage' => 'Top 100 Cities & Commercial Corridors',
                    'fields' => ['Workshop Name', 'Owner Name', 'Mobile Number', 'Services Offered (Mechanical, Body Shop, Detailing)', 'Location'],
                    'audience' => 'Spare Parts Distributors, Workshop Tools Suppliers, Motor Oil Brands'
                ],
                [
                    'title' => 'Active Vehicle Buyers & Trade-In Inquirers',
                    'count' => '160,000+ Verified Car Intenders',
                    'coverage' => 'Metros & Tier 2 Cities',
                    'fields' => ['Buyer Name', 'Verified WhatsApp', 'Budget Range', 'Fuel Type Preference (Petrol, EV, Hybrid)', 'Current Vehicle'],
                    'audience' => 'New Car Dealerships, Used Car Platforms, Auto Financing NBFCs'
                ]
            ],
            'journey' => [
                [
                    'step' => '01',
                    'phase' => 'Dealership & Workshop Discovery',
                    'time' => '⏱️ Instant Access',
                    'title' => 'Target Automotive Showrooms, Garage Networks & Active Car Intenders',
                    'desc' => 'Filter by OEM brand network, multi-brand service capability, or prospective car buyers ready to upgrade their vehicle.',
                    'you_do' => [
                        'Choose dealer network, garage workshops, or car buyers',
                        'Filter by region, vehicle segment (Luxury, SUV, EV), or turnover',
                        'Download clean lists with verified phone numbers'
                    ],
                    'how_it_works' => [
                        'Continuous phone line validation ensures zero outdated dealership contacts',
                        'Segmented by brand affiliation for targeted B2B pitches'
                    ],
                    'kpi' => '🎯 99.2% Dealership Phone Verification',
                    'image' => 'assets/images/journey/wa-step-1.jpg'
                ],
                [
                    'step' => '02',
                    'phase' => 'Test Drive & Trade-In Bot',
                    'time' => '⚡ 2-Minute Booking',
                    'title' => 'Automate Test Drive Scheduling & Instant Used Car Exchange Valuations',
                    'desc' => 'Prospects can select vehicle variants, request doorstep test drives, and receive instant trade-in valuations by submitting photos on WhatsApp.',
                    'you_do' => [
                        'Upload vehicle feature comparison PDFs and video walkarounds',
                        'Set up automated test drive calendar with sales team assignment',
                        'Enable photo upload for used car valuation estimates'
                    ],
                    'how_it_works' => [
                        'AI assistant matches buyer preferences and recommends matching trims',
                        'Doorstep test drive requests are dispatched to field sales executive apps'
                    ],
                    'kpi' => '🚗 82% Test Drive Attendance Rate',
                    'image' => 'assets/images/journey/wa-step-2.jpg'
                ],
                [
                    'step' => '03',
                    'phase' => 'Periodic Service & Warranty Retention',
                    'time' => '🔧 Automated Follow-ups',
                    'title' => 'Automate Periodic Maintenance Reminders, Invoices & Extended Warranty',
                    'desc' => 'Trigger automated WhatsApp service reminders based on mileage or last service date. Send digital job cards and payment links.',
                    'you_do' => [
                        'Sync DMS (Dealer Management System) with WhatsApp automation',
                        'Schedule 6-month and 1-year periodic service alerts',
                        'Send digital inspection reports and estimates with 1-click approval'
                    ],
                    'how_it_works' => [
                        'Customers approve additional repairs directly via WhatsApp buttons',
                        'UPI payment links collect service bills, reducing service bay wait times'
                    ],
                    'kpi' => '📈 3.4x Increase in Workshop Bay Utilization',
                    'image' => 'assets/images/journey/wa-step-3.jpg'
                ]
            ],
            'problems' => [
                ['title' => 'Test Drive No-Shows & Lead Drop-offs', 'desc' => 'Showrooms spend heavily on lead generation, but 45% of test drive leads go cold before setting foot in the showroom.'],
                ['title' => 'Customer Churn After Free Services End', 'desc' => 'Vehicle owners switch to local roadside mechanics once manufacturer warranty ends due to lack of dealership follow-up.'],
                ['title' => 'Manual Follow-ups for Used Car Trade-ins', 'desc' => 'Evaluating exchange vehicles requires back-and-forth phone calls that delay deal closures.'],
                ['title' => 'Lost Spare Parts & Accessories Revenue', 'desc' => 'Distributors and garages struggle to communicate stock availability and new product arrivals to repair shops.']
            ],
            'solutions' => [
                ['title' => 'Instant WhatsApp Test Drive Booking', 'desc' => 'Allows car intenders to pick their preferred time slot and vehicle variant in 30 seconds with automated calendar reminders.'],
                ['title' => 'Automated Mileage-Based Service Alerts', 'desc' => 'Calculates service due dates and sends tailored WhatsApp reminders with discount coupons, boosting customer retention.'],
                ['title' => 'Instant Photo-Based Exchange Valuation', 'desc' => 'Customers submit vehicle pictures and RC details in chat for preliminary trade-in quotes within minutes.'],
                ['title' => 'B2B WhatsApp Parts Catalog Broadcasts', 'desc' => 'Pushes wholesale inventory lists and price updates to mechanics with 98% open rates.']
            ]
        ],

        'travel-hospitality' => [
            'slug' => 'travel-hospitality',
            'name' => 'Travel & Hospitality',
            'emoji' => '✈️',
            'color' => '#6366f1',
            'color_light' => 'rgba(99, 102, 241, 0.1)',
            'icon_class' => 'mega-icon-indigo',
            'badge' => 'TRAVEL, TOURISM & HOTEL BUSINESS DATA',
            'subtitle' => 'Hotels, resorts, travel agencies, tour operators and hospitality businesses.',
            'hero_title' => 'Boost Room Bookings & Tour Sales With <span class="grad-text">Travel Leads</span>',
            'hero_desc' => 'Connect with boutique hotels, luxury resorts, outbound tour operators, and holiday travelers. Deliver instant itineraries, hotel confirmations, and concierge services on WhatsApp.',
            'stats' => [
                ['410K+', 'Travel & Hospitality Contacts'],
                ['88%', 'Itinerary Open Rate'],
                ['0% OTA', 'Commission on Direct Bookings'],
                ['24/7', 'Guest Concierge Bot']
            ],
            'chat_sim' => [
                'bot_name' => 'InboxWa TravelConcierge',
                'bot_status' => 'Resort Booking Assistant',
                'avatar' => '✈️',
                'messages' => [
                    ['type' => 'user', 'text' => 'Hi, do you have a private pool villa available in Goa for this long weekend?'],
                    ['type' => 'bot', 'text' => 'Hello! Yes, our Beachfront Private Pool Villa is available for Oct 12-15. Package includes complimentary breakfast, airport pickup, and sunset cruise. Would you like the complete photo brochure and direct booking discount?'],
                    ['type' => 'user', 'text' => 'Yes please, send the brochure and quote.'],
                    ['type' => 'bot', 'text' => '📄 Sent! Here is the photo brochure. Book directly via WhatsApp to save 15% compared to MakeMyTrip/Booking.com. Click here to confirm reservation.']
                ],
                'floats' => [
                    ['Villa Reserved', 'Direct Booking (No OTA Fee)'],
                    ['Flight & Tour Itinerary', 'PDF Delivered'],
                    ['Concierge Active', 'Room Service & Spa']
                ]
            ],
            'datasets' => [
                [
                    'title' => 'Hotels, Resorts & Homestays Directory',
                    'count' => '38,000+ Verified Properties',
                    'coverage' => 'Pan-India Leisure & Business Destinations',
                    'fields' => ['Property Name', 'General Manager / Owner', 'Direct Mobile', 'Star Rating', 'Room Inventory', 'Location'],
                    'audience' => 'Hotel Supplies, Linen Manufacturers, Booking Engines, Channel Managers, F&B Vendors'
                ],
                [
                    'title' => 'Travel Agencies & Outbound Tour Operators',
                    'count' => '29,000+ Travel Agents',
                    'coverage' => 'Top Metros & Tourism Hubs (IATA & Non-IATA)',
                    'fields' => ['Agency Name', 'Owner / MD', 'Mobile Number', 'Specialty (Corporate Travel, Domestic Tours, International)'],
                    'audience' => 'DMCs (Destination Management Companies), Airline Consolidators, Visa Services'
                ],
                [
                    'title' => 'Frequent Corporate Travelers & Holiday Seekers',
                    'count' => '130,000+ Active Travelers',
                    'coverage' => 'Major Outbound Markets',
                    'fields' => ['Traveler Name', 'Verified WhatsApp', 'Travel Frequency', 'Preferred Destinations (Dubai, Bali, Europe, Goa)'],
                    'audience' => 'Holiday Package Providers, Luxury Resorts, Travel Insurance Companies'
                ]
            ],
            'journey' => [
                [
                    'step' => '01',
                    'phase' => 'Travel Audience Profiling',
                    'time' => '⏱️ Instant Access',
                    'title' => 'Select Hotels, Travel Agents or Vacation Seekers by Destination',
                    'desc' => 'Target boutique hotels looking for supplies, outbound travel agencies, or high-intent tourists planning seasonal getaways.',
                    'you_do' => [
                        'Choose hotel operators, tour agencies, or holiday travelers',
                        'Filter by destination focus (Goa, Himachal, Dubai, Thailand, Europe)',
                        'Export verified WhatsApp numbers'
                    ],
                    'how_it_works' => [
                        'Validation verifies active business phone numbers and property websites',
                        'DMC agency credentials cross-checked against travel association directories'
                    ],
                    'kpi' => '🎯 99.1% Travel Industry Contact Accuracy',
                    'image' => 'assets/images/journey/wa-step-1.jpg'
                ],
                [
                    'step' => '02',
                    'phase' => 'Interactive Itinerary & Direct Booking',
                    'time' => '⚡ 3-Minute Itinerary',
                    'title' => 'Send Beautiful Day-wise WhatsApp Itineraries & Collect Direct Deposits',
                    'desc' => 'Ditch slow email quotes. Send interactive day-wise itineraries with resort photos and 1-tap payment links, bypassing 20% OTA commissions.',
                    'you_do' => [
                        'Upload itinerary templates with hotel photos and activity lists',
                        'Configure custom quotation generators for group and solo travelers',
                        'Integrate instant booking deposit links via UPI and International Cards'
                    ],
                    'how_it_works' => [
                        'Travelers review schedules and book directly inside WhatsApp',
                        'Booking engine locks dates and dispatches instant booking voucher PDFs'
                    ],
                    'kpi' => '💰 Save 15-20% OTA Commission Fees',
                    'image' => 'assets/images/journey/wa-step-2.jpg'
                ],
                [
                    'step' => '03',
                    'phase' => 'In-Stay Concierge & Upselling',
                    'time' => '🌟 5-Star Guest Delight',
                    'title' => 'Automate Pre-Arrival Check-in, Room Service & Tour Upsells',
                    'desc' => 'Enable contactless digital ID check-in, room service ordering, and local adventure tour booking directly through a 24/7 WhatsApp concierge.',
                    'you_do' => [
                        'Send automated digital check-in links 24 hours before guest arrival',
                        'Offer room upgrades, spa sessions, and airport transfers',
                        'Collect TripAdvisor and Google Reviews upon checkout'
                    ],
                    'how_it_works' => [
                        'Concierge bot routes guest requests to housekeeping and F&B staff in real time',
                        'Automated post-checkout survey drives 4.8-star online reviews'
                    ],
                    'kpi' => '⭐ 3.2x Increase in 5-Star Guest Reviews',
                    'image' => 'assets/images/journey/wa-step-3.jpg'
                ]
            ],
            'problems' => [
                ['title' => 'Crippling 18-25% OTA Commissions', 'desc' => 'Hotels lose huge margins to Booking.com and MakeMyTrip because they lack effective direct guest booking channels.'],
                ['title' => 'Itineraries Lost in Unread Emails', 'desc' => 'Travel agents spend hours crafting customized holiday plans only for emails to go unread or unreplied.'],
                ['title' => 'Slow Front Desk Check-in Lines', 'desc' => 'Guests arriving after long journeys face frustrating queues for passport and ID photocopy verification.'],
                ['title' => 'Missed On-Property Ancillary Revenue', 'desc' => 'Resorts fail to promote spa packages, candlelit dinners, and adventure tours during guest stays.']
            ],
            'solutions' => [
                ['title' => 'Direct WhatsApp Booking Engine', 'desc' => 'Enables travelers to reserve rooms and tour packages directly with zero intermediary commission fees.'],
                ['title' => 'Interactive Rich Media Itineraries', 'desc' => 'Sends day-wise itineraries with videos and hotel photos that achieve 88% open and read rates within 10 minutes.'],
                ['title' => '1-Click Pre-Arrival WhatsApp Check-in', 'desc' => 'Allows guests to upload ID photos prior to arrival, enabling 30-second key handovers upon arrival.'],
                ['title' => 'AI Guest Concierge for Upselling', 'desc' => 'Suggests spa treatments, restaurant reservations, and excursions directly to guests\' phones during their stay.']
            ]
        ],

        'restaurants-food' => [
            'slug' => 'restaurants-food',
            'name' => 'Restaurants & Food',
            'emoji' => '🍽️',
            'color' => '#ea580c',
            'color_light' => 'rgba(234, 88, 12, 0.1)',
            'icon_class' => 'mega-icon-orange',
            'badge' => 'RESTAURANT, CLOUD KITCHEN & FOOD BUSINESS LEADS',
            'subtitle' => 'Restaurants, cafes, cloud kitchens, catering and food businesses.',
            'hero_title' => 'Own Your Customers & Cut Aggregator Fees With <span class="grad-text">Food Leads</span>',
            'hero_desc' => 'Connect with restaurant owners, cloud kitchen chains, caterers, and food brands. Build direct WhatsApp food ordering, table reservations, and automated loyalty rewards to bypass 30% Swiggy/Zomato commissions.',
            'stats' => [
                ['390K+', 'F&B Business Contacts'],
                ['30%', 'Saved on Food Aggregator Commissions'],
                ['4.2x', 'Higher Repeat Order Rate'],
                ['Instant', 'Digital Menu & Table Booking']
            ],
            'chat_sim' => [
                'bot_name' => 'InboxWa FoodBot',
                'bot_status' => 'Restaurant Ordering Active',
                'avatar' => '🍽️',
                'messages' => [
                    ['type' => 'user', 'text' => 'Hi, I would like to order dinner for home delivery.'],
                    ['type' => 'bot', 'text' => 'Welcome to Truffles Bistro! 🍕 Browse our interactive digital menu right here on WhatsApp. Order directly to get 20% off + Free Dessert with code CHEF20! Click "View Menu" to start.'],
                    ['type' => 'user', 'text' => 'Ordered 1x Woodfired Margherita & 1x Tiramisu.'],
                    ['type' => 'bot', 'text' => '✅ Order received! Your meal is being freshly prepared. Estimated delivery time: 32 minutes. Track your delivery partner live here.']
                ],
                'floats' => [
                    ['Direct Food Order', 'Zero 30% Aggregator Fee'],
                    ['Table Reserved', 'Tonight 8:30 PM (4 Guests)'],
                    ['Loyalty Points', '₹150 Cashback Credited']
                ]
            ],
            'datasets' => [
                [
                    'title' => 'Fine Dine, Casual Restaurants & Cafes Directory',
                    'count' => '62,000+ Restaurant Owners',
                    'coverage' => 'Pan-India Metros & Food Capitals',
                    'fields' => ['Restaurant Name', 'Owner / General Manager', 'Direct Mobile', 'Cuisine Type', 'Seating Capacity', 'FSSAI License Status'],
                    'audience' => 'Food Ingredients Suppliers, POS Software, Commercial Kitchen Equipment, Beverage Brands'
                ],
                [
                    'title' => 'Cloud Kitchens & Ghost Kitchen Chains',
                    'count' => '22,000+ Cloud Kitchens',
                    'coverage' => 'Top Delivery Corridors',
                    'fields' => ['Brand Name', 'Kitchen Operator Name', 'Mobile Number', 'Operating Brands Count', 'City'],
                    'audience' => 'Packaging Manufacturers, Bulk Grocery Vendors, Delivery Fleet Services'
                ],
                [
                    'title' => 'Catering Companies & Event Food Providers',
                    'count' => '18,000+ Caterers',
                    'coverage' => 'Pan-India Across All States',
                    'fields' => ['Catering Business Name', 'Proprietor Name', 'Phone Number', 'Capacity (Guests per event)', 'City'],
                    'audience' => 'Wholesale Food Vendors, Cutlery & Crockery Suppliers, Banquet Halls'
                ]
            ],
            'journey' => [
                [
                    'step' => '01',
                    'phase' => 'F&B Industry Targeting',
                    'time' => '⏱️ Instant Access',
                    'title' => 'Filter Cafes, Cloud Kitchens, Caterers & Food Brands by City',
                    'desc' => 'Reach restaurateurs looking for food packaging, organic ingredients, kitchen equipment, or commercial POS software.',
                    'you_do' => [
                        'Choose restaurant profile: Fine Dine, Cloud Kitchen, QSR, or Catering',
                        'Select city or neighborhood food cluster',
                        'Download clean contact lists with verified phone numbers'
                    ],
                    'how_it_works' => [
                        'FSSAI registry and location checks ensure genuine active food businesses',
                        'Real-time WhatsApp validation eliminates inactive numbers'
                    ],
                    'kpi' => '🎯 99.0% Active Restaurant Data Accuracy',
                    'image' => 'assets/images/journey/wa-step-1.jpg'
                ],
                [
                    'step' => '02',
                    'phase' => 'Direct WhatsApp Food Ordering',
                    'time' => '⚡ 1-Tap Digital Menu',
                    'title' => 'Launch Digital WhatsApp Menu & Take Orders with Zero Commission',
                    'desc' => 'Customers browse menu categories, customize toppings, and pay via UPI directly within WhatsApp, keeping 100% of the food margin.',
                    'you_do' => [
                        'Upload menu items with appetizing food photos and prices',
                        'Configure delivery radius and packaging charges',
                        'Integrate thermal kitchen order printers (KOT) for instant kitchen alerts'
                    ],
                    'how_it_works' => [
                        'Customers order food in 3 taps without downloading third-party apps',
                        'Kitchen receives instant tickets while customers track preparation progress'
                    ],
                    'kpi' => '💸 Zero 30% Delivery App Commission',
                    'image' => 'assets/images/journey/wa-step-2.jpg'
                ],
                [
                    'step' => '03',
                    'phase' => 'Automated Table Booking & Loyalty',
                    'time' => '🍕 4.2x Repeat Orders',
                    'title' => 'Automate Weekend Table Bookings & Personalized Birthday/Weekend Offers',
                    'desc' => 'Fill empty tables during weekdays and turn one-time diners into loyal regulars with automated birthday treats and weekend specials.',
                    'you_do' => [
                        'Enable 24/7 table reservations with instant party size confirmation',
                        'Send automated weekend specials and chef recommendation broadcasts',
                        'Reward repeat diners with automated WhatsApp loyalty cashbacks'
                    ],
                    'how_it_works' => [
                        'Diners book tables instantly without calling crowded hostess stands',
                        'Personalized recommendation engine brings back customers every 14 days'
                    ],
                    'kpi' => '📈 42% Higher Customer Repeat Rate',
                    'image' => 'assets/images/journey/wa-step-3.jpg'
                ]
            ],
            'problems' => [
                ['title' => 'Brutal 25-35% Food Aggregator Commissions', 'desc' => 'Swiggy and Zomato eat up food profit margins and hide customer phone numbers, preventing direct relationships.'],
                ['title' => 'Chaotic Weekend Table Reservation Calls', 'desc' => 'Staff miss reservation calls during dinner rush hours, causing lost banquet and walk-in sales.'],
                ['title' => 'Low Repeat Visits from First-Time Diners', 'desc' => 'Restaurants spend heavily to attract guests once, but have no channel to re-engage them with specials.'],
                ['title' => 'Printed Paper Menus Go Outdated Quickly', 'desc' => 'Updating prices or seasonal items requires expensive re-printing and slow distribution.']
            ],
            'solutions' => [
                ['title' => 'Commission-Free WhatsApp Direct Ordering', 'desc' => 'Take direct delivery and takeaway orders with zero commissions, saving thousands in monthly aggregator fees.'],
                ['title' => 'Automated 24/7 Table Booking Bot', 'desc' => 'Lets diners reserve tables in 20 seconds, automatically managing table availability and sending reminders.'],
                ['title' => 'Automated VIP Loyalty & Birthday Treats', 'desc' => 'Automatically delivers special discounts on customer birthdays, anniversaries, and Friday evenings.'],
                ['title' => 'Live Digital WhatsApp Catalog Menu', 'desc' => 'Update item prices, out-of-stock items, and chef specials in real time with instant customer viewing.']
            ]
        ],

        'beauty-wellness' => [
            'slug' => 'beauty-wellness',
            'name' => 'Beauty & Wellness',
            'emoji' => '💅',
            'color' => '#f43f5e',
            'color_light' => 'rgba(244, 63, 94, 0.1)',
            'icon_class' => 'mega-icon-pink',
            'badge' => 'BEAUTY, SALON & WELLNESS BUSINESS DATA',
            'subtitle' => 'Salons, spas, beauty clinics, wellness centres and professionals.',
            'hero_title' => 'Fill Salon Chairs & Spa Appointments With <span class="grad-text">Wellness Leads</span>',
            'hero_desc' => 'Reach salon chains, luxury day spas, cosmetic dermatologists, yoga studios, and fitness centers. Automate appointment bookings, stylist selection, and monthly beauty membership renewals on WhatsApp.',
            'stats' => [
                ['310K+', 'Salons & Wellness Leads'],
                ['91%', 'Appointment Show-Up Rate'],
                ['3.6x', 'Membership Plan Renewals'],
                ['Instant', 'Stylist & Service Booking']
            ],
            'chat_sim' => [
                'bot_name' => 'InboxWa GlamDesk',
                'bot_status' => 'Spa & Salon Assistant',
                'avatar' => '💅',
                'messages' => [
                    ['type' => 'user', 'text' => 'Hi, I want to book a Balayage hair coloring session and Swedish massage.'],
                    ['type' => 'bot', 'text' => 'Hello Gorgeous! ✨ Senior Stylist Maya is available for Balayage at 2 PM, followed by a 60-minute Swedish Spa session at 4:30 PM. Would you like this luxury combo package for ₹3,999 (save ₹1,200)?'],
                    ['type' => 'user', 'text' => 'Yes, please book this combo for Saturday!'],
                    ['type' => 'bot', 'text' => '✅ Reserved for Saturday at 2:00 PM! Here is your booking token. We\'ll prepare your herbal tea welcome drink. See you soon!']
                ],
                'floats' => [
                    ['Salon Slot Reserved', 'Saturday 2:00 PM (Stylist Maya)'],
                    ['Service Combo', 'Balayage + Spa Package'],
                    ['Membership Active', 'Silver Glam Member']
                ]
            ],
            'datasets' => [
                [
                    'title' => 'Hair Salons & Beauty Parlors Directory',
                    'count' => '75,000+ Salon Owners',
                    'coverage' => 'Top 50 Indian Cities',
                    'fields' => ['Salon Name', 'Owner / Manager Name', 'Direct Mobile', 'Chairs Count', 'Services Offered', 'City'],
                    'audience' => 'Cosmetics Brands, Hair Care Products, Salon Furniture, Esthetics Equipment'
                ],
                [
                    'title' => 'Luxury Day Spas & Ayurvedic Wellness Centers',
                    'count' => '18,000+ Wellness Centers',
                    'coverage' => 'Metros & Destination Retreats',
                    'fields' => ['Spa Name', 'Managing Director', 'Mobile Number', 'Therapy Specialization', 'Location'],
                    'audience' => 'Essential Oils, Organic Skincare, Spa Supplies, Wellness Software'
                ],
                [
                    'title' => 'Cosmetic Dermatologists & Aesthetic Clinics',
                    'count' => '14,000+ Aesthetic Clinics',
                    'coverage' => 'Tier 1 & Tier 2 Cities',
                    'fields' => ['Clinic Name', 'Doctor / Esthetician', 'Mobile Number', 'Treatments Offered (Laser, Botox, Facials)', 'City'],
                    'audience' => 'Medical Lasers, Skincare Pharmaceuticals, Clinical Consumables'
                ]
            ],
            'journey' => [
                [
                    'step' => '01',
                    'phase' => 'Beauty Industry Prospecting',
                    'time' => '⏱️ Instant Access',
                    'title' => 'Access Verified Salons, Luxury Spas & Aesthetic Clinic Owners',
                    'desc' => 'Target beauty entrepreneurs for professional cosmetics distribution, salon equipment, or booking software.',
                    'you_do' => [
                        'Choose salon chains, independent spas, or dermatology clinics',
                        'Filter by tier (Premium, High Street, Local)',
                        'Download clean lists with verified phone numbers'
                    ],
                    'how_it_works' => [
                        'Verified business registrations ensure genuine operating beauty studios',
                        'Mobile lines verified against active WhatsApp profiles'
                    ],
                    'kpi' => '🎯 98.8% Verified Contact Accuracy',
                    'image' => 'assets/images/journey/wa-step-1.jpg'
                ],
                [
                    'step' => '02',
                    'phase' => '1-Tap Stylist & Slot Booking',
                    'time' => '⚡ 30s Appointment',
                    'title' => 'Enable Clients to Pick Favorite Stylists & Reserve Slots in 30 Seconds',
                    'desc' => 'Clients browse service rate cards, view stylist portfolios, and book appointment slots without calling crowded salon receptions.',
                    'you_do' => [
                        'Upload service menus (Haircuts, Facials, Nail Art, Spa)',
                        'Configure stylist schedules and chair capacities',
                        'Enable automated token numbers and booking confirmations'
                    ],
                    'how_it_works' => [
                        'Client selects treatment and available stylist with simple tap buttons',
                        'Appointment syncs immediately with salon software, eliminating double bookings'
                    ],
                    'kpi' => '⚡ 70% of Bookings Handled Automatically',
                    'image' => 'assets/images/journey/wa-step-2.jpg'
                ],
                [
                    'step' => '03',
                    'phase' => 'Retention & Membership Renewals',
                    'time' => '💅 High Re-Visit Rate',
                    'title' => 'Trigger Automated Haircut Cycles & Beauty Package Renewal Reminders',
                    'desc' => 'Send automatic alerts 25 days after a haircut or facial to book the next session. Automate monthly wellness membership collections.',
                    'you_do' => [
                        'Set automated re-booking triggers based on typical service cycles',
                        'Broadcast exclusive festive packages (Diwali, Wedding Season)',
                        'Collect membership dues with 1-click UPI links'
                    ],
                    'how_it_works' => [
                        'Smart frequency algorithm predicts when client is due for a touch-up',
                        'Polite WhatsApp reminder drives 91% appointment attendance'
                    ],
                    'kpi' => '🏆 91% Appointment Attendance Rate',
                    'image' => 'assets/images/journey/wa-step-3.jpg'
                ]
            ],
            'problems' => [
                ['title' => 'High No-Show Rates for Salon Bookings', 'desc' => 'Clients book appointments but forget or cancel at the last minute, leaving expensive stylists idle.'],
                ['title' => 'Phone Ringing Non-stop During Styling', 'desc' => 'Stylists are distracted from clients by ringing phones for routine price and slot inquiries.'],
                ['title' => 'Client Drop-off Between Service Cycles', 'desc' => 'Salons fail to remind clients when their root touch-up, haircut, or facial is overdue, losing them to rivals.'],
                ['title' => 'Struggling with Slow Weekday Footfalls', 'desc' => 'Salons are packed on weekends but have empty chairs Monday through Thursday with heavy overheads.']
            ],
            'solutions' => [
                ['title' => 'Automated 2-Hour WhatsApp Reminder', 'desc' => 'Sends gentle reminders 2 hours prior to service, slashing salon no-shows to under 9%.'],
                ['title' => '24/7 WhatsApp Virtual Receptionist', 'desc' => 'Allows clients to book appointments, select stylists, and view rates without human intervention.'],
                ['title' => 'Smart Predictive Re-Booking Engine', 'desc' => 'Automatically nudges clients when their beauty service is due (e.g. 28 days for color touch-ups).'],
                ['title' => 'Weekday Flash Offer Broadcasts', 'desc' => 'Broadcasts exclusive weekday discounts to fill slow time slots with verified local clients.']
            ]
        ],

        'it-software' => [
            'slug' => 'it-software',
            'name' => 'IT & Software',
            'emoji' => '💻',
            'color' => '#8b5cf6',
            'color_light' => 'rgba(139, 92, 246, 0.1)',
            'icon_class' => 'mega-icon-purple',
            'badge' => 'IT, SAAS & SOFTWARE ENTERPRISE LEADS',
            'subtitle' => 'IT companies, software businesses, technology providers and SaaS companies.',
            'hero_title' => 'Scale B2B Tech Demos & Enterprise Sales With <span class="grad-text">IT Leads</span>',
            'hero_desc' => 'Connect with CTOs, VP Engineering, IT directors, software development agencies, and SaaS founders. Automate product demo bookings, technical trial follow-ups, and developer onboarding on WhatsApp.',
            'stats' => [
                ['450K+', 'Tech Decision Makers'],
                ['3.8x', 'Higher Demo Booking Rate'],
                ['99.4%', 'Executive Direct Delivery'],
                ['60s', 'API Webhook Integration']
            ],
            'chat_sim' => [
                'bot_name' => 'InboxWa TechAI',
                'bot_status' => 'Enterprise Solutions Desk',
                'avatar' => '💻',
                'messages' => [
                    ['type' => 'user', 'text' => 'Hi, we are looking to integrate an automated WhatsApp API for our SaaS CRM.'],
                    ['type' => 'bot', 'text' => 'Hello! Our official Meta Cloud API infrastructure provides 99.99% uptime, dedicated webhooks, and handles 50,000+ messages/sec. Would you like our Swagger API docs or a 15-minute technical demo with our solutions architect?'],
                    ['type' => 'user', 'text' => 'Let\'s schedule a technical demo for Friday.'],
                    ['type' => 'bot', 'text' => '✅ Scheduled! Technical demo confirmed for Friday at 3 PM. Here is the Google Meet link and API documentation access key. Looking forward to speaking!']
                ],
                'floats' => [
                    ['Demo Scheduled', 'Friday 3:00 PM (Google Meet)'],
                    ['Tech Lead Qualified', 'SaaS Platform with 50K Users'],
                    ['API Docs Shared', 'Postman Collection Delivered']
                ]
            ],
            'datasets' => [
                [
                    'title' => 'Software Companies, Web & App Development Agencies',
                    'count' => '42,000+ Tech Firms',
                    'coverage' => 'Bangalore, Hyderabad, Pune, Gurgaon, Chennai & Global Hubs',
                    'fields' => ['Company Name', 'CEO / Founder Name', 'Direct Mobile', 'Tech Stack Focus', 'Employee Count Band', 'LinkedIn URL'],
                    'audience' => 'Cloud Providers, Developer Tooling, Co-working Spaces, HR Tech Platforms'
                ],
                [
                    'title' => 'Enterprise CTOs, IT Directors & VP Engineering',
                    'count' => '68,000+ C-Level Decision Makers',
                    'coverage' => 'Mid-Market to Fortune 500 Enterprises',
                    'fields' => ['Executive Name', 'Title (CTO, CIO, VP Eng)', 'Company Name', 'Corporate Mobile', 'Industry Vertical'],
                    'audience' => 'Cybersecurity Vendors, Enterprise SaaS, IT Infrastructure Consulting'
                ],
                [
                    'title' => 'Funded SaaS Startups (Seed to Series C)',
                    'count' => '15,000+ High-Growth Tech Companies',
                    'coverage' => 'India, US, UK, Southeast Asia',
                    'fields' => ['Startup Name', 'Founder Name', 'Funding Round', 'Investors', 'Direct Mobile', 'Website'],
                    'audience' => 'Venture Capital, Fintech Payment Gateways, Cloud Infrastructure, B2B Growth Agencies'
                ]
            ],
            'journey' => [
                [
                    'step' => '01',
                    'phase' => 'B2B Tech Account Mapping',
                    'time' => '⏱️ Instant Access',
                    'title' => 'Filter Tech Companies by Tech Stack, Headcount & Funding Round',
                    'desc' => 'Target software agency heads, cloud architects, and enterprise IT buyers segmented by tech stack and business size.',
                    'you_do' => [
                        'Choose criteria: SaaS Startups, IT Agencies, or Enterprise IT Directors',
                        'Filter by employee size (10-50, 50-200, 500+) or funding stage',
                        'Export verified business phone numbers and corporate emails'
                    ],
                    'how_it_works' => [
                        'Continuous LinkedIn and corporate registry cross-referencing keeps data fresh',
                        'Zero generic contact@ or info@ emails — 100% direct decision-maker mobiles'
                    ],
                    'kpi' => '🎯 99.4% Verified C-Level Contact Accuracy',
                    'image' => 'assets/images/journey/wa-step-1.jpg'
                ],
                [
                    'step' => '02',
                    'phase' => 'Instant Demo Scheduling Bot',
                    'time' => '⚡ 1-Click Calendar Sync',
                    'title' => 'Automate B2B Product Demos, Whitepapers & Technical Trial Onboarding',
                    'desc' => 'Skip the back-and-forth email scheduling. Prospects book Google Meet or Zoom calls directly in WhatsApp with instant calendar sync.',
                    'you_do' => [
                        'Connect Calendly or Google Calendar with WhatsApp bot',
                        'Send one-click API documentation and architecture whitepapers',
                        'Qualify buyer budget and implementation timeline in chat'
                    ],
                    'how_it_works' => [
                        'Bot matches prospect availability with AE/Solutions Engineer schedules',
                        'Automatic meeting invites and calendar events generated in real time'
                    ],
                    'kpi' => '📅 3.8x Higher Demo Booking Rate',
                    'image' => 'assets/images/journey/wa-step-2.jpg'
                ],
                [
                    'step' => '03',
                    'phase' => 'Trial Activation & Enterprise Conversion',
                    'time' => '📈 45% Shorter Sales Cycle',
                    'title' => 'Nudge Inactive Free Trials & Deliver Instant WhatsApp Technical Support',
                    'desc' => 'Accelerate trial-to-paid conversion with automated milestone check-ins, feature walkthroughs, and direct VIP WhatsApp developer support.',
                    'you_do' => [
                        'Set webhook triggers when a user signs up for a free trial',
                        'Send automated tips on Day 1, Day 3, and Day 7 of trial period',
                        'Provide dedicated WhatsApp channel for enterprise pilot support'
                    ],
                    'how_it_works' => [
                        'Developer support queries routed directly to engineering Slack/Teams channels',
                        'Reduces enterprise pilot evaluation time by over 45%'
                    ],
                    'kpi' => '🚀 45% Shorter Enterprise Sales Cycle',
                    'image' => 'assets/images/journey/wa-step-3.jpg'
                ]
            ],
            'problems' => [
                ['title' => 'Cold Outreach Emails Lost in Spam', 'desc' => 'B2B tech buyers receive hundreds of cold emails daily; open rates have collapsed below 12%.'],
                ['title' => 'High Drop-off Between Sign-up and Demo', 'desc' => 'Inbound trial users sign up on web pages but never book a demo call or respond to email sequences.'],
                ['title' => 'Painfully Long Enterprise Sales Cycles', 'desc' => 'Sales teams wait days for responses to contract questions, price quotes, and technical specs.'],
                ['title' => 'Poor Trial Activation Rates', 'desc' => 'Free trial users get stuck during API integration and abandon the product due to lack of immediate support.']
            ],
            'solutions' => [
                ['title' => 'High-Impact Executive WhatsApp Outreach', 'desc' => 'Connects with IT leaders on their primary mobile channel with 98% open rates and genuine responses.'],
                ['title' => 'Instant In-Chat Demo Scheduler', 'desc' => 'Enables prospects to book product demos directly on WhatsApp within 30 seconds of landing page submission.'],
                ['title' => 'Direct WhatsApp Deal Rooms', 'desc' => 'Multi-agent shared team inboxes speed up RFP clarifications, contract approvals, and enterprise sign-offs.'],
                ['title' => 'Automated Developer Trial Nudges', 'desc' => 'Guides developers through setup milestones with automated video snippets and webhook checks.']
            ]
        ],

        'digital-marketing' => [
            'slug' => 'digital-marketing',
            'name' => 'Digital Marketing',
            'emoji' => '📣',
            'color' => '#2563eb',
            'color_light' => 'rgba(37, 99, 235, 0.1)',
            'icon_class' => 'mega-icon-blue',
            'badge' => 'DIGITAL MARKETING, SEO & AD AGENCY LEADS',
            'subtitle' => 'Marketing agencies, advertising agencies, SEO businesses and consultants.',
            'hero_title' => 'Close Retainers & Power Client Campaigns With <span class="grad-text">Marketing Agency Leads</span>',
            'hero_desc' => 'Target digital marketing agency founders, performance media buyers, SEO specialists, and creative directors. Deliver automated lead qualification and Click-to-WhatsApp ad funnels that deliver 4x ROAS.',
            'stats' => [
                ['380K+', 'Marketing & Agency Contacts'],
                ['4.2x', 'Higher Click-to-WhatsApp ROAS'],
                ['98%', 'Campaign Message Read Rate'],
                ['0.8s', 'Ad Lead Instant Notification']
            ],
            'chat_sim' => [
                'bot_name' => 'InboxWa AgencyBot',
                'bot_status' => 'Marketing Solutions Desk',
                'avatar' => '📣',
                'messages' => [
                    ['type' => 'user', 'text' => 'Hi, we run Meta Ads for e-commerce brands and want to connect Click-to-WhatsApp funnels.'],
                    ['type' => 'bot', 'text' => 'Welcome! InboxWa integrates directly with Meta Ads Manager (CTWA). When users click your ad, an automated WhatsApp sequence triggers in 0.8s, cutting your CPL by 40%. Would you like our agency white-label partner deck?'],
                    ['type' => 'user', 'text' => 'Yes please, send the white-label deck.'],
                    ['type' => 'bot', 'text' => '📄 Sent! Here is our Agency Partner Deck. You can rebrand the platform under your own domain and earn 40% recurring monthly margins. Would you like a partner demo?']
                ],
                'floats' => [
                    ['Agency Retainer Pitch', 'White-Label Deck Delivered'],
                    ['CTWA Campaign', '4.2x Meta Ad ROAS'],
                    ['Instant Lead Alert', '0.8s Webhook to Slack']
                ]
            ],
            'datasets' => [
                [
                    'title' => 'Digital Marketing, Performance & Creative Agencies',
                    'count' => '48,000+ Agency Founders',
                    'coverage' => 'Pan-India Across All Major Metros',
                    'fields' => ['Agency Name', 'Founder / Managing Director', 'Direct Mobile', 'Specialty (Performance, SEO, Social, Branding)', 'City'],
                    'audience' => 'AdTech Tools, MarTech Platforms, SEO Software, Content Marketplaces'
                ],
                [
                    'title' => 'Chief Marketing Officers (CMOs) & Brand Heads',
                    'count' => '32,000+ Marketing Executives',
                    'coverage' => 'Leading Mid-Market & Enterprise Brands',
                    'fields' => ['Executive Name', 'Title (CMO, VP Marketing)', 'Company Name', 'Corporate Mobile', 'Annual Ad Spend Bracket'],
                    'audience' => 'Top Creative Agencies, Media Buying Houses, Influencer Networks'
                ],
                [
                    'title' => 'Freelance Marketers, SEO Consultants & Media Buyers',
                    'count' => '65,000+ Independent Professionals',
                    'coverage' => 'Pan-India & Remote',
                    'fields' => ['Name', 'Core Skill (Google Ads, Facebook Ads, Copywriting)', 'Mobile Number', 'LinkedIn URL'],
                    'audience' => 'Agency Hiring, SaaS Tool Discounts, Training Courses, Freelance Platforms'
                ]
            ],
            'journey' => [
                [
                    'step' => '01',
                    'phase' => 'Agency Network Discovery',
                    'time' => '⏱️ Instant Access',
                    'title' => 'Filter Marketing Agencies by Service Focus & Billing Size',
                    'desc' => 'Target agency principals managing performance budgets or brand heads searching for high-ROI marketing services.',
                    'you_do' => [
                        'Select agency type: Performance Marketing, SEO, Social Media, or PR',
                        'Filter by city or client vertical focus',
                        'Download clean lists with verified phone numbers'
                    ],
                    'how_it_works' => [
                        'Verification algorithms cross-check active agency portfolio sites and LinkedIn',
                        'Direct mobile numbers connect straight to decision-maker desks'
                    ],
                    'kpi' => '🎯 99.1% Marketing Decision Maker Accuracy',
                    'image' => 'assets/images/journey/wa-step-1.jpg'
                ],
                [
                    'step' => '02',
                    'phase' => 'Click-to-WhatsApp Funnel Deployment',
                    'time' => '⚡ 0.8s Lead Trigger',
                    'title' => 'Connect Meta & Google Ads to Automated WhatsApp Lead Capture',
                    'desc' => 'Replace sluggish website landing pages with Click-to-WhatsApp ads. Instantly qualify ad leads in under 60 seconds with conversational AI.',
                    'you_do' => [
                        'Link Facebook & Instagram Ads to official WhatsApp number',
                        'Set up interactive lead qualification questions',
                        'Push hot leads into Google Sheets or client CRM instantly'
                    ],
                    'how_it_works' => [
                        'User taps ad and WhatsApp opens with pre-filled message text',
                        'Conversational bot captures name, email, and requirements in seconds'
                    ],
                    'kpi' => '⚡ 42% Lower Cost-Per-Lead (CPL)',
                    'image' => 'assets/images/journey/wa-step-2.jpg'
                ],
                [
                    'step' => '03',
                    'phase' => 'Automated Pitch & Retainer Closing',
                    'time' => '📈 4.2x Higher ROAS',
                    'title' => 'Share Case Studies, Proposal Audits & Close Monthly Retainers',
                    'desc' => 'Send automated marketing audit reports, client video testimonials, and retainer agreements directly via WhatsApp.',
                    'you_do' => [
                        'Deliver personalized website SEO & ad audit PDFs',
                        'Send automated calendar booking for strategy pitch calls',
                        'Collect digital sign-off and monthly retainer payments via UPI'
                    ],
                    'how_it_works' => [
                        'Agency sales consultants receive instant desktop notifications when high-budget clients engage',
                        'Audit files open immediately on mobile without requiring file downloads'
                    ],
                    'kpi' => '🏆 4.2x Client Pitch-to-Close Conversion',
                    'image' => 'assets/images/journey/wa-step-3.jpg'
                ]
            ],
            'problems' => [
                ['title' => 'Skyrocketing Cost-Per-Lead (CPL) on Meta Ads', 'desc' => 'Website landing page conversion rates are dropping to 2-3% as mobile users abandon clunky web forms.'],
                ['title' => 'Leads Go Cold Before Sales Calls Begin', 'desc' => 'Marketing teams pass leads to sales reps hours later, by which time 60% of prospects have forgotten the ad.'],
                ['title' => 'Clients Questioning Marketing ROI', 'desc' => 'Agencies struggle to prove lead quality and direct revenue attribution to their enterprise clients.'],
                ['title' => 'Manual Client Reporting Overhead', 'desc' => 'Agency account managers waste entire days compiling manual PDF performance reports every week.']
            ],
            'solutions' => [
                ['title' => 'High-Converting Click-to-WhatsApp Ads', 'desc' => 'Drives ad traffic straight into WhatsApp with zero page bounce, slashing CPL by up to 42%.'],
                ['title' => 'Instant Sub-Second AI Follow-up', 'desc' => 'Engages ad clicks within 0.8 seconds while buyer intent is at its absolute peak.'],
                ['title' => 'Full-Funnel Lead Qualification Tracking', 'desc' => 'Logs lead quality ratings and closed deals directly back into Meta Pixel and client CRMs.'],
                ['title' => 'White-Label Agency Client Portal', 'desc' => 'Offers agencies a fully rebrandable client dashboard with automated weekly performance reporting.']
            ]
        ],

        'professional-services' => [
            'slug' => 'professional-services',
            'name' => 'Professional Services',
            'emoji' => '💼',
            'color' => '#4f46e5',
            'color_light' => 'rgba(79, 70, 229, 0.1)',
            'icon_class' => 'mega-icon-indigo',
            'badge' => 'LEGAL, CA, CONSULTING & ADVISORY LEADS',
            'subtitle' => 'Consultants, legal, accounting, HR, business and professional service providers.',
            'hero_title' => 'Sign High-Value Retainer Clients With <span class="grad-text">Professional Services Leads</span>',
            'hero_desc' => 'Reach Chartered Accountants, corporate law firms, management consultants, HR agencies, and tax advisors. Automate client onboarding, confidential document exchange, and consultation scheduling on WhatsApp.',
            'stats' => [
                ['340K+', 'Consultants & Professional Leads'],
                ['89%', 'Consultation Show-Up Rate'],
                ['3.2x', 'Faster Retainer Approvals'],
                ['256-bit', 'Confidential File Encryption']
            ],
            'chat_sim' => [
                'bot_name' => 'InboxWa LegalDesk',
                'bot_status' => 'Advisory Assistant Active',
                'avatar' => '💼',
                'messages' => [
                    ['type' => 'user', 'text' => 'Hi, I need assistance with Private Limited Company Incorporation and GST registration.'],
                    ['type' => 'bot', 'text' => 'Hello! We assist startups with end-to-end Pvt Ltd incorporation in 5-7 business days. Package includes Name Approval, SPICe+ filing, PAN, TAN, and 1-year GST compliance. Would you like our checklist and fee schedule?'],
                    ['type' => 'user', 'text' => 'Yes, please share the document checklist.'],
                    ['type' => 'bot', 'text' => '📄 Sent! Here is the incorporation checklist. Our Senior Corporate CA is available for a 15-minute consultation tomorrow at 11 AM. Should I confirm your slot?']
                ],
                'floats' => [
                    ['Pvt Ltd Incorporation', 'Document Checklist Sent'],
                    ['CA Consultation', 'Tomorrow 11:00 AM'],
                    ['GST Filing Complete', 'Acknowledgement PDF']
                ]
            ],
            'datasets' => [
                [
                    'title' => 'Chartered Accountants (CAs), Tax & Audit Firms',
                    'count' => '62,000+ Practicing CAs',
                    'coverage' => 'Pan-India Across All Commercial Hubs',
                    'fields' => ['Firm Name', 'Senior Partner / CA Name', 'Direct Mobile', 'ICAI Reg No.', 'City', 'Services (Audit, GST, Tax, Advisory)'],
                    'audience' => 'Accounting Software, Tax ERP, FinTech Platforms, Office Leasing'
                ],
                [
                    'title' => 'Corporate Law Firms, Advocates & Legal Advisors',
                    'count' => '45,000+ Legal Professionals',
                    'coverage' => 'High Courts & Commercial Metros',
                    'fields' => ['Law Firm Name', 'Managing Partner Name', 'Mobile Number', 'Practice Area (Corporate, IP, Litigation)', 'City'],
                    'audience' => 'Legal Research Software, Document Automation, Virtual Court Tools'
                ],
                [
                    'title' => 'Management Consultants & HR Staffing Agencies',
                    'count' => '38,000+ Agency Principals',
                    'coverage' => 'Top 25 Corporate Centers',
                    'fields' => ['Agency Name', 'Director / Partner', 'Phone Number', 'Specialty (Executive Search, IT Staffing, Biz Strategy)'],
                    'audience' => 'HRMS Software, Job Portals, Corporate Training, Executive Coaching'
                ]
            ],
            'journey' => [
                [
                    'step' => '01',
                    'phase' => 'Professional Practice Discovery',
                    'time' => '⏱️ Instant Access',
                    'title' => 'Select CA Firms, Corporate Lawyers & Management Consultants by City',
                    'desc' => 'Target senior partners at accounting firms, law offices, or recruitment consultancies looking for enterprise clients or software tools.',
                    'you_do' => [
                        'Choose profession: Chartered Accountants, Legal Counsel, or HR Consultancies',
                        'Filter by firm size, city, or practice area',
                        'Download verified contact lists with mobile numbers'
                    ],
                    'how_it_works' => [
                        'Registration directories (ICAI, Bar Council) verify active practicing status',
                        'Direct mobile numbers connect directly to managing partners'
                    ],
                    'kpi' => '🎯 98.9% Professional Directory Accuracy',
                    'image' => 'assets/images/journey/wa-step-1.jpg'
                ],
                [
                    'step' => '02',
                    'phase' => 'Confidential Onboarding & Document Bot',
                    'time' => '⚡ 1-Minute Intake',
                    'title' => 'Automate Client Intake, Document Checklists & Paid Consultations',
                    'desc' => 'Allow clients to submit incorporation documents, PAN cards, and financial statements securely over WhatsApp with bank-grade encryption.',
                    'you_do' => [
                        'Configure dynamic document checklists based on service selected',
                        'Enable paid consultation fees via UPI prior to appointment booking',
                        'Deploy automated nondisclosure agreement (NDA) sign-off'
                    ],
                    'how_it_works' => [
                        'Client uploads confidential PDFs and images directly inside the encrypted chat',
                        'All files are categorized and stored in dedicated client cloud folders'
                    ],
                    'kpi' => '🔒 256-bit Encrypted Document Transfer',
                    'image' => 'assets/images/journey/wa-step-2.jpg'
                ],
                [
                    'step' => '03',
                    'phase' => 'Filing Deadlines & Retainer Billing',
                    'time' => '📈 100% On-Time Compliance',
                    'title' => 'Automate Statutory Compliance Deadlines & Monthly Retainer Invoicing',
                    'desc' => 'Send automated GST, TDS, and Income Tax filing deadline reminders to clients. Dispatch monthly retainer bills with 1-click payment links.',
                    'you_do' => [
                        'Schedule monthly compliance deadline alerts (e.g. 20th for GSTR-3B)',
                        'Send automated payment receipts and filing acknowledgement PDFs',
                        'Track client retainer statuses on shared multi-agent dashboard'
                    ],
                    'how_it_works' => [
                        'Clients pay fees instantly on WhatsApp, eliminating overdue account receivables',
                        'Automated reminder sequence prevents late filing penalties for clients'
                    ],
                    'kpi' => '🏆 94% On-Time Retainer Collection Rate',
                    'image' => 'assets/images/journey/wa-step-3.jpg'
                ]
            ],
            'problems' => [
                ['title' => 'Unpaid Consultation Slots & No-Shows', 'desc' => 'Advisors waste hours preparing for advisory meetings only for prospective clients to cancel or fail to show up.'],
                ['title' => 'Document Collection Bottlenecks', 'desc' => 'Filing taxes or company incorporations stalls because clients take weeks to email requested bank and ID documents.'],
                ['title' => 'Overdue Retainer Accounts Receivable', 'desc' => 'Professional firms spend uncomfortable hours chasing clients for unpaid monthly retainers and advisory fees.'],
                ['title' => 'Missed Regulatory Filing Deadlines', 'desc' => 'Clients forget compliance cutoffs, blaming advisors when government authorities impose late fees and penalties.']
            ],
            'solutions' => [
                ['title' => 'Pre-Paid WhatsApp Consultation Scheduler', 'desc' => 'Requires clients to pay consultation fees upfront via UPI, slashing no-shows to under 10%.'],
                ['title' => 'Mobile-Friendly Document Intake', 'desc' => 'Enables clients to snap photos of tax forms and IDs directly on WhatsApp, speeding up intake by 4x.'],
                ['title' => '1-Click Automated Retainer Invoicing', 'desc' => 'Sends digital invoices with instant UPI links directly into the client\'s WhatsApp chat on the 1st of every month.'],
                ['title' => 'Automated Compliance Deadline Countdown', 'desc' => 'Pushes countdown alerts for GST, TDS, and advance tax dates, ensuring zero client late fees.']
            ]
        ],

        'manufacturing' => [
            'slug' => 'manufacturing',
            'name' => 'Manufacturing',
            'emoji' => '🏭',
            'color' => '#d97706',
            'color_light' => 'rgba(217, 119, 6, 0.1)',
            'icon_class' => 'mega-icon-amber',
            'badge' => 'INDUSTRIAL & MANUFACTURING BUSINESS LEADS',
            'subtitle' => 'Manufacturers, factories, suppliers and industrial businesses.',
            'hero_title' => 'Generate High-Volume Industrial RFQs & <span class="grad-text">Manufacturing Contracts</span>',
            'hero_desc' => 'Target factory owners, plant heads, industrial machinery manufacturers, and procurement directors. Automate bulk catalog delivery, RFQ specification capture, and dealer network inquiries on WhatsApp.',
            'stats' => [
                ['420K+', 'Manufacturing Units & Factories'],
                ['3.5x', 'Faster RFQ Quotation Turnaround'],
                ['99.2%', 'Factory Owner Direct Mobiles'],
                ['24/7', 'B2B Catalog & Spec Sheet Bot']
            ],
            'chat_sim' => [
                'bot_name' => 'InboxWa IndustryDesk',
                'bot_status' => 'Manufacturing Solutions Active',
                'avatar' => '🏭',
                'messages' => [
                    ['type' => 'user', 'text' => 'Hi, we require 10,000 units of custom CNC machined aluminum components monthly.'],
                    ['type' => 'bot', 'text' => 'Hello! We specialize in precision CNC milling and turning with ISO 9001 certification. Please upload your 2D/3D CAD technical drawing PDF or specification sheet here for an instant engineering quote.'],
                    ['type' => 'user', 'text' => 'Uploading the CAD drawing PDF now.'],
                    ['type' => 'bot', 'text' => '📄 Received! Our chief tooling engineer has received your drawing. We are preparing a preliminary unit cost estimate and sample delivery timeline. Expect your quote in 2 hours!']
                ],
                'floats' => [
                    ['Industrial RFQ Received', '10,000 Units Monthly'],
                    ['CAD Drawing Uploaded', 'Tooling Review in Progress'],
                    ['ISO 9001 Certified', 'Spec Sheet Delivered']
                ]
            ],
            'datasets' => [
                [
                    'title' => 'Industrial Units, Factories & Manufacturing Plants',
                    'count' => '85,000+ Factory Owners',
                    'coverage' => 'All Major Industrial Zones (MIDC, GIDC, Peenya, Manesar, Sriperumbudur)',
                    'fields' => ['Company Name', 'Managing Director / Plant Head', 'Direct Mobile', 'Industry (Automotive, Heavy Machinery, Plastics, Metal)', 'City'],
                    'audience' => 'Raw Material Suppliers, Industrial Automation, Logistics, Factory Solar Solutions'
                ],
                [
                    'title' => 'Procurement & Purchase Heads (B2B Manufacturing)',
                    'count' => '42,000+ Sourcing Directors',
                    'coverage' => 'Mid-to-Large Manufacturing Enterprises',
                    'fields' => ['Executive Name', 'Title (Head of Procurement, Sourcing Manager)', 'Company Name', 'Mobile Number', 'Annual Spend Band'],
                    'audience' => 'OEM Component Suppliers, MRO Consumables, Packaging Manufacturers'
                ],
                [
                    'title' => 'Machinery, Machine Tools & Industrial Equipment Dealers',
                    'count' => '35,000+ Equipment Dealers',
                    'coverage' => 'Pan-India Industrial Belts',
                    'fields' => ['Dealership Name', 'Owner Name', 'Phone Number', 'Equipment Category (CNC, Hydraulics, Welding, Compressors)'],
                    'audience' => 'Industrial Lubricants, Cutting Tools, Safety Equipment, Machinery Finance'
                ]
            ],
            'journey' => [
                [
                    'step' => '01',
                    'phase' => 'Industrial Cluster Targeting',
                    'time' => '⏱️ Instant Access',
                    'title' => 'Filter Factories & Industrial Units by Sector and Cluster Zone',
                    'desc' => 'Target managing directors and plant heads across automotive, chemical, textile, plastics, and engineering manufacturing hubs.',
                    'you_do' => [
                        'Choose manufacturing vertical: Metal Fabrication, CNC, Plastics, Textiles, or Chemical',
                        'Filter by industrial area (e.g. Pune MIDC, Manesar, Coimbatore)',
                        'Download clean lists with verified phone numbers'
                    ],
                    'how_it_works' => [
                        'Factory data scrubbed against industrial park registries and GST databases',
                        '100% verified mobile numbers connect straight to factory owners'
                    ],
                    'kpi' => '🎯 99.2% Industrial Contact Accuracy',
                    'image' => 'assets/images/journey/wa-step-1.jpg'
                ],
                [
                    'step' => '02',
                    'phase' => 'Automated RFQ & Drawing Collection',
                    'time' => '⚡ 60s RFQ Submission',
                    'title' => 'Capture Technical Drawings, Quantities & Specifications in Chat',
                    'desc' => 'Allow procurement buyers to upload engineering CAD drawings and volume requirements directly via WhatsApp for swift technical review.',
                    'you_do' => [
                        'Upload technical product spec sheets and machine capacity brochures',
                        'Configure automated RFQ forms (Material Grade, Volume, Tolerance)',
                        'Enable high-resolution file uploads for technical blueprints'
                    ],
                    'how_it_works' => [
                        'Procurement buyer submits RFQ details in under 2 minutes',
                        'Technical drawings routed straight to production planning and estimation teams'
                    ],
                    'kpi' => '⚡ 75% Faster RFQ Turnaround Time',
                    'image' => 'assets/images/journey/wa-step-2.jpg'
                ],
                [
                    'step' => '03',
                    'phase' => 'Order Tracking & Factory Dispatch',
                    'time' => '📦 Real-Time Transparency',
                    'title' => 'Automate Dispatch Notes, Lorry Receipts (LR) & Invoice Sharing',
                    'desc' => 'Keep industrial buyers updated with production milestones, dispatch notifications, lorry receipt numbers, and GST e-way bills on WhatsApp.',
                    'you_do' => [
                        'Connect ERP (SAP, Tally, Zoho) to send automated dispatch alerts',
                        'Send photos of packaged industrial batches prior to loading',
                        'Push LR transport copies and payment status alerts'
                    ],
                    'how_it_works' => [
                        'Buyers track shipment status without calling logistics desk',
                        'Reduces factory dispatch disputes and payment delays'
                    ],
                    'kpi' => '🏆 98% Delivery Transparency Rate',
                    'image' => 'assets/images/journey/wa-step-3.jpg'
                ]
            ],
            'problems' => [
                ['title' => 'Painfully Slow RFQ Quoting Cycles', 'desc' => 'Industrial RFQs sit in cluttered email inboxes for days, causing eager buyers to place purchase orders with faster competitors.'],
                ['title' => 'Heavy Printed Product Catalogs Go Outdated', 'desc' => 'Manufacturing companies spend lakhs printing heavy product catalogs that become obsolete the moment steel or polymer prices change.'],
                ['title' => 'Incessant Calls About Order Dispatch Status', 'desc' => 'Purchase officers call factory sales reps constantly demanding lorry receipt (LR) copies and delivery updates.'],
                ['title' => 'Difficulty Reaching Real Factory Decision Makers', 'desc' => 'Traditional B2B portals supply outdated switchboard phone numbers that never connect to real plant owners.']
            ],
            'solutions' => [
                ['title' => 'Instant WhatsApp RFQ Capture Bot', 'desc' => 'Captures technical requirements, material specifications, and CAD drawings within 2 minutes of inquiry.'],
                ['title' => 'Interactive Digital WhatsApp Catalog', 'desc' => 'Shares up-to-date technical brochures, product specs, and live price tiers directly on mobile.'],
                ['title' => 'Automated Dispatch & LR Notification', 'desc' => 'Pushes dispatch photos, transporter LR copies, and driver details automatically when goods leave the plant.'],
                ['title' => 'Direct Factory Owner Mobile Data', 'desc' => 'Supplies 100% verified mobile numbers of factory founders and purchase heads, bypassing gatekeepers.']
            ]
        ],

        'retail' => [
            'slug' => 'retail',
            'name' => 'Retail',
            'emoji' => '🏪',
            'color' => '#10b981',
            'color_light' => 'rgba(16, 185, 129, 0.1)',
            'icon_class' => 'mega-icon-green',
            'badge' => 'RETAIL STORES & CONSUMER BUSINESS DATA',
            'subtitle' => 'Local retailers, stores, distributors and consumer businesses.',
            'hero_title' => 'Drive Local Footfalls & WhatsApp Orders With <span class="grad-text">Retail Leads</span>',
            'hero_desc' => 'Connect with supermarket owners, fashion boutiques, electronics retailers, and local neighborhood merchants. Turn local shoppers into repeat buyers with WhatsApp digital catalogs, festive sale broadcasts, and loyalty points.',
            'stats' => [
                ['550K+', 'Retailers & Store Leads'],
                ['98%', 'Festive Broadcast Open Rate'],
                ['3.8x', 'Increase in Repeat Store Visits'],
                ['Instant', 'QR Code WhatsApp Ordering']
            ],
            'chat_sim' => [
                'bot_name' => 'InboxWa RetailMart',
                'bot_status' => 'Store Assistant Active',
                'avatar' => '🏪',
                'messages' => [
                    ['type' => 'user', 'text' => 'Hi, is the Sony 55-inch 4K Bravia TV in stock at your Koramangala showroom?'],
                    ['type' => 'bot', 'text' => 'Hello! Yes, the Sony 55" Bravia is in stock at our Koramangala store with a special Festive Cashback of ₹4,000 + Free Wall Mount Installation! Would you like us to reserve a unit for store pickup today or arrange free doorstep delivery?'],
                    ['type' => 'user', 'text' => 'Reserve it for store pickup at 6 PM.'],
                    ['type' => 'bot', 'text' => '✅ Reserved! Your booking ID is #RET-482. We\'ve notified Store Manager Ramesh. Show this message at the counter to claim your discount!']
                ],
                'floats' => [
                    ['Store Unit Reserved', 'Sony 55" 4K TV (Koramangala)'],
                    ['Festive Cashback', '₹4,000 Discount Applied'],
                    ['Loyalty Balance', '500 Store Credits']
                ]
            ],
            'datasets' => [
                [
                    'title' => 'Supermarkets, Kirana Stores & Department Stores',
                    'count' => '120,000+ Store Owners',
                    'coverage' => 'Pan-India Across All Cities & Townships',
                    'fields' => ['Store Name', 'Owner / Proprietor Name', 'Direct Mobile', 'Retail Format', 'City / Area', 'GST Reg'],
                    'audience' => 'FMCG Brands, Wholesale Distributors, Retail POS Hardware, Digital Payment Apps'
                ],
                [
                    'title' => 'Fashion Boutiques, Apparel & Footwear Stores',
                    'count' => '65,000+ Retail Outlets',
                    'coverage' => 'Commercial Markets & High Streets',
                    'fields' => ['Boutique Name', 'Proprietor Name', 'Mobile Number', 'Category (Ethnic, Menswear, Western, Kids)', 'City'],
                    'audience' => 'Apparel Wholesalers, Garment Manufacturers, Hanger & Display Suppliers'
                ],
                [
                    'title' => 'Consumer Electronics, Mobile & Home Appliance Stores',
                    'count' => '45,000+ Retailers',
                    'coverage' => 'Top 100 Cities & Tech Markets',
                    'fields' => ['Store Name', 'Owner Name', 'Phone Number', 'Brands Handled', 'Location'],
                    'audience' => 'Electronics Accessories, Extended Warranty Providers, Consumer Financing'
                ]
            ],
            'journey' => [
                [
                    'step' => '01',
                    'phase' => 'Retail Network Targeting',
                    'time' => '⏱️ Instant Access',
                    'title' => 'Filter Retail Stores by Category, City & High-Street Location',
                    'desc' => 'Target store owners looking for new FMCG brands, inventory financing, digital billing software, or wholesale merchandise.',
                    'you_do' => [
                        'Choose retail category: Grocery, Fashion, Electronics, Hardware, or Jewelry',
                        'Select target cities, pin codes, or commercial shopping districts',
                        'Download clean contact lists with verified phone numbers'
                    ],
                    'how_it_works' => [
                        'Store registry and commercial address verification ensure real operating shops',
                        'Direct mobile numbers connect straight to retail store owners'
                    ],
                    'kpi' => '🎯 99.0% Verified Retail Contact Accuracy',
                    'image' => 'assets/images/journey/wa-step-1.jpg'
                ],
                [
                    'step' => '02',
                    'phase' => 'In-Store QR & WhatsApp Catalog',
                    'time' => '⚡ 1-Tap Catalog',
                    'title' => 'Enable Customers to Scan Store QR Codes & Order via WhatsApp',
                    'desc' => 'Place stylish QR stands at your billing counter. Customers scan to join your VIP club, view digital catalogs, and receive instant bills on WhatsApp.',
                    'you_do' => [
                        'Generate branded store QR code for checkout counters',
                        'Upload daily inventory and new arrival catalogs',
                        'Automate paperless digital invoice delivery on WhatsApp'
                    ],
                    'how_it_works' => [
                        'Customer scans QR code and their verified WhatsApp profile is captured legally',
                        'Digital receipts eliminate expensive paper roll costs'
                    ],
                    'kpi' => '⚡ 80% Faster Customer Loyalty Enrollment',
                    'image' => 'assets/images/journey/wa-step-2.jpg'
                ],
                [
                    'step' => '03',
                    'phase' => 'Festive Broadcasts & VIP Offers',
                    'time' => '🎉 3.8x Footfalls',
                    'title' => 'Send Personalized Festive Offers, Clearance Deals & Store Event Invites',
                    'desc' => 'Broadcast weekend flash sales and new season arrivals with 98% open rates, driving foot traffic directly into your retail stores.',
                    'you_do' => [
                        'Segment customers by purchase history (e.g. Menswear vs Womenswear)',
                        'Send festive sale broadcasts with limited-time discount vouchers',
                        'Track in-store redemption of WhatsApp digital discount coupons'
                    ],
                    'how_it_works' => [
                        'Rich media broadcasts showcase crisp product photos and store directions',
                        'Boosts weekend footfalls by up to 3.8x compared to print newspaper flyers'
                    ],
                    'kpi' => '🚀 3.8x Higher In-Store Footfall Conversion',
                    'image' => 'assets/images/journey/wa-step-3.jpg'
                ]
            ],
            'problems' => [
                ['title' => 'Losing Customers to Big E-commerce Platforms', 'desc' => 'Local stores struggle to compete against Amazon and quick-commerce apps because they have no direct digital channel.'],
                ['title' => 'Expensive & Wasted Paper Pamphlets', 'desc' => 'Retailers spend heavily on newspaper insert flyers that are thrown into trash bins without driving measurable visits.'],
                ['title' => 'Zero Customer Contact Database', 'desc' => 'Thousands of customers walk through retail doors every month, but stores capture no phone numbers to bring them back.'],
                ['title' => 'Slow Inventory Clearance & Dead Stock', 'desc' => 'Unsold seasonal merchandise sits on shelves for months, tying up essential retail working capital.']
            ],
            'solutions' => [
                ['title' => 'Direct WhatsApp Neighborhood Commerce', 'desc' => 'Allows local customers to check stock and order for doorstep delivery straight from their favorite neighborhood shop.'],
                ['title' => 'High-Impact WhatsApp Sale Broadcasts', 'desc' => 'Replaces newspaper flyers with rich WhatsApp messages achieving 98% read rates within 15 minutes.'],
                ['title' => 'Instant QR Code Customer Capture', 'desc' => 'Builds a massive 10,000+ local customer database effortlessly via QR scans at checkout counters.'],
                ['title' => 'Flash Clearance Broadcasts', 'desc' => 'Clear seasonal inventory in 48 hours by broadcasting exclusive discount offers to loyal customers.']
            ]
        ],

        'b2b-suppliers' => [
            'slug' => 'b2b-suppliers',
            'name' => 'B2B & Suppliers',
            'emoji' => '📦',
            'color' => '#0284c7',
            'color_light' => 'rgba(2, 132, 199, 0.1)',
            'icon_class' => 'mega-icon-cyan',
            'badge' => 'WHOLESALERS, DISTRIBUTORS & B2B SUPPLIER LEADS',
            'subtitle' => 'Wholesalers, distributors, suppliers, vendors and B2B businesses.',
            'hero_title' => 'Expand Wholesale Distribution & <span class="grad-text">B2B Dealer Networks</span>',
            'hero_desc' => 'Connect with authorized distributors, wholesale stockists, import-export traders, and B2B merchant networks. Automate wholesale price tier inquiries, bulk re-orders, and credit limit tracking on WhatsApp.',
            'stats' => [
                ['490K+', 'Wholesalers & B2B Suppliers'],
                ['4.5x', 'Faster Dealer Re-Order Processing'],
                ['99.3%', 'Verified Merchant Contacts'],
                ['Instant', 'Bulk Price List Dispatch']
            ],
            'chat_sim' => [
                'bot_name' => 'InboxWa B2B Wholesale',
                'bot_status' => 'Distributor Solutions Active',
                'avatar' => '📦',
                'messages' => [
                    ['type' => 'user', 'text' => 'Hi, we are an electronics distributor in Ahmedabad. We need wholesale price lists for mobile accessories.'],
                    ['type' => 'bot', 'text' => 'Hello! Welcome to Apex Wholesale. We supply 500+ branded accessories with Tier-1 wholesale pricing for orders above ₹50,000. Please select your preferred category to download our latest wholesale rate card.'],
                    ['type' => 'user', 'text' => 'Downloading Fast Chargers & Power Banks list.'],
                    ['type' => 'bot', 'text' => '📄 Sent! Here is the latest wholesale price sheet with volume slab discounts. Reply with item codes to generate an instant commercial proforma invoice!']
                ],
                'floats' => [
                    ['Bulk Wholesale Inquiry', 'Order Size: ₹1.5 Lakhs'],
                    ['Dealer Approved', 'Ahmedabad Territory'],
                    ['Proforma Invoice', 'PDF Generated Instantly']
                ]
            ],
            'datasets' => [
                [
                    'title' => 'Wholesale Distributors & Stockists Directory',
                    'count' => '95,000+ Verified Stockists',
                    'coverage' => 'Pan-India Across All Commercial Mandis & Wholesale Markets',
                    'fields' => ['Business Name', 'Managing Partner Name', 'Direct Mobile', 'Category (FMCG, Hardware, Pharma, Textiles)', 'City / Mandi'],
                    'audience' => 'Brands Expanding Distribution, Supply Chain Software, Commercial Credit NBFCs'
                ],
                [
                    'title' => 'Import-Export Traders & Clearing Agents',
                    'count' => '32,000+ Exporters / Importers',
                    'coverage' => 'Major Ports & Freight Corridors (JNPT, Mundra, Chennai, Delhi ICD)',
                    'fields' => ['Company Name', 'Director Name', 'Mobile Number', 'IEC Code Status', 'Commodities Handled'],
                    'audience' => 'Freight Forwarders, Trade Finance, Customs Compliance, Cargo Insurance'
                ],
                [
                    'title' => 'B2B Vendors, Contractors & Sourcing Agents',
                    'count' => '65,000+ Corporate Vendors',
                    'coverage' => 'Metros & Tier 2 Supply Clusters',
                    'fields' => ['Vendor Name', 'Proprietor Name', 'Phone Number', 'Supply Capabilities', 'GST Registered State'],
                    'audience' => 'Facility Management, Corporate Procurement, Industrial Consumables'
                ]
            ],
            'journey' => [
                [
                    'step' => '01',
                    'phase' => 'Wholesale Market Discovery',
                    'time' => '⏱️ Instant Access',
                    'title' => 'Target Wholesalers, Distributors & Stockists by Category & Mandi',
                    'desc' => 'Filter B2B dealers across major commercial wholesale markets (e.g. Crawford Market, Sadar Bazar, Chickpet, Chandni Chowk).',
                    'you_do' => [
                        'Select product category: FMCG, Electricals, Textiles, Hardware, or Chemicals',
                        'Filter by state, city, or wholesale trading hub',
                        'Download clean lists with verified phone numbers'
                    ],
                    'how_it_works' => [
                        'Wholesale market trade associations and GST filings verify active merchant status',
                        'Mobile lines verified against WhatsApp business accounts'
                    ],
                    'kpi' => '🎯 99.3% Verified B2B Merchant Accuracy',
                    'image' => 'assets/images/journey/wa-step-1.jpg'
                ],
                [
                    'step' => '02',
                    'phase' => 'Automated Wholesale Rate Cards',
                    'time' => '⚡ Instant PDF Rate Cards',
                    'title' => 'Share Dynamic Volume-Tiered Price Lists & Generate Proforma Invoices',
                    'desc' => 'Dealers view wholesale discounts based on order volume, check live stock availability, and receive instant proforma invoices on WhatsApp.',
                    'you_do' => [
                        'Upload wholesale price sheets with quantity break discounts (e.g. 50, 100, 500 units)',
                        'Configure automated proforma invoice generator with GST calculation',
                        'Enable credit limit verification for authorized channel partners'
                    ],
                    'how_it_works' => [
                        'Dealers enter item quantities and get instant itemized cost breakdowns',
                        'Commercial invoices are generated and pushed straight to warehouse ERP'
                    ],
                    'kpi' => '⚡ 4.5x Faster Bulk Order Processing',
                    'image' => 'assets/images/journey/wa-step-2.jpg'
                ],
                [
                    'step' => '03',
                    'phase' => 'Dealer Re-orders & Payment Collection',
                    'time' => '📈 Zero Billing Delay',
                    'title' => 'Automate Weekly Stock Re-Orders, Outstanding Ledger & Bank Reminders',
                    'desc' => 'Send automatic weekly stock refill nudges to retailers. Deliver account ledger statements and collect payments with NEFT/RTGS/UPI links.',
                    'you_do' => [
                        'Schedule automated stock re-order prompts every Monday morning',
                        'Share monthly dealer ledger account statements as PDF',
                        'Automate payment due date reminders to reduce credit recovery cycles'
                    ],
                    'how_it_works' => [
                        'Dealers tap "Re-order Last Week\'s Items" to repeat orders in 5 seconds',
                        'Slashes overdue merchant credit cycles from 45 days down to 18 days'
                    ],
                    'kpi' => '🏆 60% Reduction in Overdue Dealer Credit',
                    'image' => 'assets/images/journey/wa-step-3.jpg'
                ]
            ],
            'problems' => [
                ['title' => 'Cluttered WhatsApp Chats & Misplaced Orders', 'desc' => 'Wholesale orders arrive via voice notes, handwritten photos, and messy text messages, leading to costly dispatch errors.'],
                ['title' => 'Dealers Delaying Payments for Months', 'desc' => 'Distributors waste enormous energy chasing retailers for payment collections on past credit cycles.'],
                ['title' => 'Constant Calls Asking "Is This In Stock?"', 'desc' => 'Sales teams spend all day answering basic stock availability questions instead of signing new retail outlets.'],
                ['title' => 'Slow Expansion of New Dealer Networks', 'desc' => 'Brands struggle to identify and onboard verified, creditworthy distributors in new geographic territories.']
            ],
            'solutions' => [
                ['title' => 'Structured In-Chat B2B Order Form', 'desc' => 'Captures exact SKUs, quantities, and GST details in structured format, eliminating human dispatch errors.'],
                ['title' => 'Automated Ledger & Payment Nudges', 'desc' => 'Sends polite automated account balance statements with 1-click payment links every week.'],
                ['title' => '24/7 Live Inventory Check Bot', 'desc' => 'Allows dealers to query SKU availability and wholesale rates in 2 seconds without calling staff.'],
                ['title' => 'Verified Distributor Database', 'desc' => 'Supplies targeted directories of authorized wholesale stockists ready to distribute new brand lines.']
            ]
        ],

        'events-wedding' => [
            'slug' => 'events-wedding',
            'name' => 'Events & Wedding',
            'emoji' => '🎉',
            'color' => '#ec4899',
            'color_light' => 'rgba(236, 72, 153, 0.1)',
            'icon_class' => 'mega-icon-pink',
            'badge' => 'WEDDING, EVENT PLANNERS & VENUE LEADS',
            'subtitle' => 'Event planners, wedding businesses, photographers, venues and related services.',
            'hero_title' => 'Book Premium Weddings & Corporate Events With <span class="grad-text">Event Leads</span>',
            'hero_desc' => 'Reach wedding planners, luxury banquet halls, event production agencies, celebrity photographers, and catering vendors. Automate date availability checks, portfolio sharing, and guest RSVP tracking on WhatsApp.',
            'stats' => [
                ['280K+', 'Wedding & Event Leads'],
                ['94%', 'Guest RSVP Response Rate'],
                ['3.9x', 'Faster Venue Booking Approvals'],
                ['Instant', 'Portfolio & Price Deck Delivery']
            ],
            'chat_sim' => [
                'bot_name' => 'InboxWa EventDesk',
                'bot_status' => 'Wedding Concierge Active',
                'avatar' => '🎉',
                'messages' => [
                    ['type' => 'user', 'text' => 'Hi, we are planning a 3-day destination wedding in Udaipur for November.'],
                    ['type' => 'bot', 'text' => 'Congratulations! ✨ Udaipur is breathtaking for destination weddings. We specialize in luxury heritage palaces, decor production, and guest logistics for 200-500 guests. Would you like our Udaipur venue portfolio and pricing package?'],
                    ['type' => 'user', 'text' => 'Yes please, send the portfolio and budget estimate.'],
                    ['type' => 'bot', 'text' => '📄 Sent! Here is our Luxury Udaipur Wedding Showcase. Our Chief Wedding Designer is available for a personalized video consultation tomorrow at 5 PM. Should I book your session?']
                ],
                'floats' => [
                    ['Destination Wedding', 'Udaipur Heritage Palace'],
                    ['RSVP Tracking Active', '320 Guests Confirmed'],
                    ['Portfolio Shared', 'Decor Showcase Delivered']
                ]
            ],
            'datasets' => [
                [
                    'title' => 'Wedding Planners & Event Management Companies',
                    'count' => '35,000+ Event Planners',
                    'coverage' => 'Pan-India Across All Major Destination & Metro Hubs',
                    'fields' => ['Company Name', 'Lead Planner / Founder Name', 'Direct Mobile', 'Event Types (Weddings, Corporate, Concerts)', 'City'],
                    'audience' => 'Decor Vendors, Audio-Visual Rentals, Artist Management, Gifting Companies'
                ],
                [
                    'title' => 'Banquet Halls, Farmhouses & Wedding Venues',
                    'count' => '24,000+ Verified Venues',
                    'coverage' => 'Metros & Destination Wedding Hubs (Jaipur, Goa, Udaipur, Jim Corbett)',
                    'fields' => ['Venue Name', 'General Manager / Owner', 'Mobile Number', 'Capacity (Guests)', 'Catering Options', 'City'],
                    'audience' => 'Caterers, Event Furniture Suppliers, Tent & Lighting Rental Providers'
                ],
                [
                    'title' => 'Wedding Photographers, Cinematographers & Artists',
                    'count' => '42,000+ Creative Professionals',
                    'coverage' => 'Pan-India',
                    'fields' => ['Studio Name', 'Lead Photographer Name', 'Phone Number', 'Portfolio Link', 'Pricing Tier'],
                    'audience' => 'Camera Gear, Photo Book Printers, Cloud Storage, Video Editing Software'
                ]
            ],
            'journey' => [
                [
                    'step' => '01',
                    'phase' => 'Event Network Discovery',
                    'time' => '⏱️ Instant Access',
                    'title' => 'Target Wedding Planners, Venues & Photographers by Destination',
                    'desc' => 'Filter by luxury destination wedding planners in Rajasthan/Goa or corporate event managers in major commercial metros.',
                    'you_do' => [
                        'Choose profile: Wedding Planners, Luxury Venues, or Event Artists',
                        'Filter by budget tier, event capacity, or destination hub',
                        'Download clean lists with verified phone numbers'
                    ],
                    'how_it_works' => [
                        'Event association registries and active portfolio verification ensure genuine planners',
                        'Direct mobile numbers connect straight to lead event designers'
                    ],
                    'kpi' => '🎯 98.7% Event Industry Contact Accuracy',
                    'image' => 'assets/images/journey/wa-step-1.jpg'
                ],
                [
                    'step' => '02',
                    'phase' => 'Instant Portfolio & Date Checking',
                    'time' => '⚡ 30s Date Check',
                    'title' => 'Share High-Res Video Portfolios & Check Auspicious Date Availability',
                    'desc' => 'Couples check auspicious wedding date availability, view theme decor photos, and receive customized quotation decks instantly in WhatsApp.',
                    'you_do' => [
                        'Upload decor photo lookbooks and wedding film highlight links',
                        'Configure dynamic wedding budget calculator in chat',
                        'Set up calendar sync for physical venue site inspections'
                    ],
                    'how_it_works' => [
                        'Couples view portfolios smoothly without navigating heavy website galleries',
                        'Captures event date, guest count, and budget within 60 seconds'
                    ],
                    'kpi' => '⚡ 3.9x Faster Venue Approval Rate',
                    'image' => 'assets/images/journey/wa-step-2.jpg'
                ],
                [
                    'step' => '03',
                    'phase' => 'Interactive Guest RSVPs & Schedule Updates',
                    'time' => '🎉 94% RSVP Response',
                    'title' => 'Automate Guest RSVP Tracking, Itinerary Sharing & Flight Coordination',
                    'desc' => 'Send interactive digital wedding invitations on WhatsApp. Collect meal preferences, flight timings, and room allocations with 94% response rates.',
                    'you_do' => [
                        'Broadcast personalized digital wedding invitation videos',
                        'Collect guest RSVP confirmations (Attending / Not Attending)',
                        'Push real-time schedule updates (e.g. Sangeet timing, Mehndi location)'
                    ],
                    'how_it_works' => [
                        'Guests tap one button to confirm attendance and dietary preferences',
                        'Live RSVP tally syncs straight into the wedding planner\'s Google Sheet'
                    ],
                    'kpi' => '⭐ 94% Guest RSVP Response Rate',
                    'image' => 'assets/images/journey/wa-step-3.jpg'
                ]
            ],
            'problems' => [
                ['title' => 'Endless Guest Calling to Confirm RSVPs', 'desc' => 'Couples and planners spend weeks calling hundreds of guests to get headcounts for catering and hotel rooms.'],
                ['title' => 'Heavy Portfolio PDFs Fail to Open on Mobile', 'desc' => 'Sending 50MB decor lookbooks over email results in broken downloads and lost wedding leads.'],
                ['title' => 'Unorganized Date & Venue Availability Queries', 'desc' => 'Venue managers receive dozens of calls every day asking if specific auspicious dates (Muhurats) are free.'],
                ['title' => 'Last-Minute Schedule Changes Cause Chaos', 'desc' => 'Weather delays or rescheduled ceremonies result in confused guests stranded at wrong venues.']
            ],
            'solutions' => [
                ['title' => '1-Tap Interactive WhatsApp RSVP Bot', 'desc' => 'Guests confirm attendance, flight details, and dietary choices with a simple tap, reaching 94% response in 48 hours.'],
                ['title' => 'Lightweight Mobile Video Portfolios', 'desc' => 'Shares crisp wedding highlight reels and decor photos optimized for instant mobile streaming.'],
                ['title' => '24/7 Venue Date Availability Checker', 'desc' => 'Allows brides and corporate organizers to check open dates and banquet capacities in 10 seconds.'],
                ['title' => 'Instant Broadcast Alerts for Wedding Guests', 'desc' => 'Pushes real-time ceremony schedule updates and Google Maps directions to all guests simultaneously.']
            ]
        ]
    ];
}

function get_business_lead_category($slug) {
    $categories = get_all_business_leads_categories();
    return $categories[$slug] ?? null;
}
