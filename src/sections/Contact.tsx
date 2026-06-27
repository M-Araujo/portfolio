export default function Contact() {
    return (
        <div className="max-w-2xl mx-auto px-6 py-16 text-white">

            <h2 className="text-3xl font-bold text-center mb-10">
                Contact Me
            </h2>

            <div className="text-center space-y-6">

                <p className="text-gray-300">
                    Want to work together or ask something?
                </p>

                <a
                    href="mailto:miriamaraujoweb@gmail.com"
                    className="inline-block bg-white text-black px-6 py-3 rounded-lg hover:bg-gray-200 transition"
                >
                    Send Email
                </a>

                <p className="text-sm text-gray-400">
                    or reach me at <span className="text-white">miriamaraujoweb@gmail.com</span>
                </p>

            </div>
        </div>
    );
}