import photo from '../assets/photo.png'

export default function Hero() {
    return (
        <section id="home" className="min-h-screen flex items-center">
            <div className="mx-auto max-w-6xl w-full px-6 grid md:grid-cols-2 gap-12 items-center">

                {/* LEFT SIDE */}
                <div>
                    <h1 className="text-4xl md:text-5xl font-bold text-white leading-tight">
                        Hi, I'm Miriam 👋
                    </h1>

                    <h2 className="text-xl md:text-2xl text-white/70 mt-3">
                        Frontend Developer
                    </h2>

                    <p className="text-white/60 mt-5 leading-relaxed max-w-md">
                        I build clean, responsive web apps using React and TypeScript.
                        I enjoy creating simple and beautiful user interfaces.
                    </p>

                    <div className="flex gap-4 mt-8">
                        <a
                            href="#projects"
                            className="px-5 py-2 rounded-lg bg-white text-black font-medium hover:scale-105 transition"
                        >
                            View Projects
                        </a>

                        <a
                            href="#contact"
                            className="px-5 py-2 rounded-lg border border-white/20 text-white hover:bg-white/10 transition"
                        >
                            Contact
                        </a>
                    </div>
                </div>

                {/* RIGHT SIDE */}
                <div className="flex justify-center">
                    <div className="w-72 h-72 md:w-96 md:h-96 rounded-full bg-gradient-to-br from-white/10 to-white/5 border border-white/10 flex items-center justify-center">
                        <img
                            src={photo}
                            alt="Avatar"
                            className="w-full h-full object-cover rounded-full"
                        />
                    </div>
                </div>

            </div>
        </section>
    );
}