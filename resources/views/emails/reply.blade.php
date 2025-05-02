@component('mail::message')
# Thank you for contacting us!

Dear {{ $user->fname }} {{ $user->lname}},

Thank you for reaching out to us! We have received your message, and we appreciate your interest in our products and services. We strive to respond to all inquiries within 24 hours, and we will get back to you as soon as possible.

However, if you require immediate assistance, do not hesitate to call our helpline <a href="tel:+35315259775">+353 1525 9775</a>.

Please note that this is an automated email response. If you have any further questions or concerns, feel free to reply to this email, and one of our representatives will get back to you shortly.

Thank you for your patience, and we hope you have a great day.

Best regards,  
<strong>CLARUS IV</strong>

Location: 30 Herbert St, 2nd Floor,  Dublin, D02 W329, Ireland

Call Us: <a href="tel:+35315259775">+353 1525 9775</a>
@endcomponent
