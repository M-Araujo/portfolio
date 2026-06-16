import { useState } from "react";

export default function Navbar() {
    const [open, setOpen] = useState(false);

    return (
        <header className="sticky top-0 z-50 border-b border-white/10 bg-black/80 backdrop-blur-md">

            <div className="mx-auto flex max-w-6xl items-center justify-between px-6 py-4">

                {/* Logo */}
                <div className="text-white font-semibold">
                    Miriam.dev
                </div>

                {/* Desktop nav */}
                <nav className="hidden md:flex gap-8 text-sm text-white/70">
                    <a className="hover:text-white transition" href="#home">Home</a>
                    <a className="hover:text-white transition" href="#about">About</a>
                    <a className="hover:text-white transition" href="#skills">Skills</a>
                    <a className="hover:text-white transition" href="#projects">Projects</a>
                    <a className="hover:text-white transition" href="#contact">Contact</a>
                </nav>

                {/* Mobile button */}
                <button
                    onClick={() => setOpen(!open)}
                    className="md:hidden text-white text-2xl"
                >
                    {open ? "✕" : "☰"}
                </button>

            </div>

            {/* Mobile menu */}
            <div
                className={`
          md:hidden overflow-hidden transition-all duration-300 ease-in-out
          ${open ? "max-h-96 opacity-100 py-4" : "max-h-0 opacity-0 py-0"}
        `}
            >
                <div className="flex flex-col gap-4 px-6 text-white/70">
                    <a className="hover:text-white transition" href="#home" onClick={() => setOpen(false)}>Home</a>
                    <a className="hover:text-white transition" href="#about" onClick={() => setOpen(false)}>About</a>
                    <a className="hover:text-white transition" href="#skills" onClick={() => setOpen(false)}>Skills</a>
                    <a className="hover:text-white transition" href="#projects" onClick={() => setOpen(false)}>Projects</a>
                    <a className="hover:text-white transition" href="#contact" onClick={() => setOpen(false)}>Contact</a>
                </div>
            </div>

        </header>
    );
}