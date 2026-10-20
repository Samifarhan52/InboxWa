import subprocess
import os
import sys

# High quality, authentic photography of humans matching each blog topic
PHOTOS = {
    'top-whatsapp-crm-software-platforms': 'photo-1522071820081-009f0129c71c', # Sales & CRM team collaborating around laptop
    'whatsapp-delivery-order-tracking-notifications': 'photo-1586528116311-ad8dd3c8310d', # Logistics & delivery parcel shipping worker
    'whatsapp-automated-invoice-billing-alerts': 'photo-1554224155-8d04cb21cd6c', # Finance accountant reviewing invoice on laptop
    'top-whatsapp-business-platform-solutions': 'photo-1519389950473-47ba0277781c', # Enterprise tech team in meeting room
    'top-ai-whatsapp-chatbots-for-business': 'photo-1549923746-c502d488b3ea', # Friendly customer support rep with headset
    'guide-to-click-to-whatsapp-ad-campaigns': 'photo-1512428559087-560fa5ceab42', # Young consumer engaging with smartphone ad
    'enterprise-whatsapp-cloud-api-service-providers': 'photo-1531482615713-2afd69097998', # Cloud software engineers collaborating
    'whatsapp-broadcast-campaign-software-tools': 'photo-1551836022-d5d88e9218df', # Digital marketing manager analyzing campaigns
    'whatsapp-bulk-messaging-platforms-guide': 'photo-1573496799652-408c2ac9fe98', # Corporate communications leader at desk
    'b2b-whatsapp-lead-generation-strategies': 'photo-1556761175-b413da4baf72', # B2B sales professionals consulting
    'shopify-whatsapp-marketing-automation-playbook': 'photo-1472851294608-062f824d29cc', # E-commerce boutique store owner packing orders
    'high-converting-whatsapp-marketing-tools': 'photo-1531538606174-0f90ff5dce83', # Creative growth marketing team meeting
    'google-ads-click-to-whatsapp-conversion-setup': 'photo-1551288049-bebda4e38f71', # Search PPC marketing analyst on computer
    'how-to-send-bulk-whatsapp-messages-safely': 'photo-1563986768609-322da13575f3', # Compliance & cybersecurity professional
    'instagram-dm-whatsapp-automation-growth-benchmarks': 'photo-1611162617474-5b21e879e113', # Social media creator with smartphone
    'reduce-cod-rto-ecommerce-whatsapp-verification': 'photo-1580674684081-7617fbf3d745', # Warehouse courier coordinator checking packages
    'launch-whatsapp-business-api-agency-solution': 'photo-1522202176988-66273c2fd55f', # SaaS agency startup founders collaborating
    'recover-shopify-abandoned-carts-via-whatsapp': 'photo-1483985988355-763728e1935b', # Happy shopper checking order on mobile phone
    'integrate-whatsapp-api-for-automated-messaging': 'photo-1498050108023-c5249f4df085', # Software engineer coding API on laptop
    'scale-operations-with-whatsapp-automation-tools': 'photo-1521737604893-d14cc237f11d', # Operations team scaling customer support
    'build-vtu-telecom-airtime-whatsapp-bot': 'photo-1533227268428-f9ed0900fb3b', # Happy user doing mobile phone top-up
    'best-woocommerce-whatsapp-order-notification-plugins': 'photo-1460925895917-afdab827c52f'  # Online merchant reviewing store analytics
}

def download_images():
    os.makedirs('assets/images/blog/v2', exist_ok=True)
    success = 0
    for idx, (slug, photo_id) in enumerate(PHOTOS.items()):
        out_path = f"assets/images/blog/v2/{slug}-hero.jpg"
        url = f"https://images.unsplash.com/{photo_id}?auto=format&fit=crop&w=1200&h=630&q=85"
        cmd = [
            "curl", "-s", "-L",
            "-A", "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7)",
            "-o", out_path,
            url
        ]
        res = subprocess.run(cmd)
        if res.returncode == 0 and os.path.exists(out_path):
            size = os.path.getsize(out_path)
            if size > 10000:
                print(f"[{idx+1}/22] Downloaded: {slug}-hero.jpg ({size//1024} KB)")
                success += 1
            else:
                print(f"[{idx+1}/22] FAILED (File too small: {size} bytes): {slug}")
        else:
            print(f"[{idx+1}/22] ERROR downloading {slug}")
    print(f"\nFinished: {success}/22 images downloaded successfully.")

if __name__ == '__main__':
    download_images()
