export default async function handler(req, res) {
  if (req.method !== 'POST') {
    return res.status(405).json({ message: 'Method not allowed' });
  }

  const { name, email, message } = req.body;

  // Option 1: Use a service like SendGrid, Mailgun, or Postmark
  // You'll need to add your API key as an environment variable in Vercel
  
  // Example with SendGrid (uncomment and configure):
  /*
  const sgMail = require('@sendgrid/mail');
  sgMail.setApiKey(process.env.SENDGRID_API_KEY);
  
  const msg = {
    to: 'your-email@example.com',
    from: 'noreply@yourdomain.com',
    subject: 'New Contact Form Submission',
    text: `Name: ${name}\nEmail: ${email}\nMessage: ${message}`,
    html: `<p><strong>Name:</strong> ${name}</p>
           <p><strong>Email:</strong> ${email}</p>
           <p><strong>Message:</strong> ${message}</p>`
  };
  
  try {
    await sgMail.send(msg);
    return res.status(200).json({ message: 'Email sent successfully' });
  } catch (error) {
    console.error(error);
    return res.status(500).json({ message: 'Error sending email' });
  }
  */

  // For now, just log and return success
  console.log('Contact form submission:', { name, email, message });
  return res.status(200).json({ message: 'Message received' });
}