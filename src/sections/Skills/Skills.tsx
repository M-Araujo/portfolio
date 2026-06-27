import { skills } from "./SkillsData";

export default function Skills() {
    return (
        <div className="max-w-5xl mx-auto px-6 py-16">

            <h2 className="text-3xl font-bold text-center mb-12">
                Skills & Tools
            </h2>

            {/* Frontend */}
            <div className="mb-10">
                <h3 className="text-xl font-semibold mb-4 text-white">
                    Frontend
                </h3>

                <div className="flex flex-wrap gap-3">
                    {skills.frontend.map((skill) => (
                        <span
                            key={skill}
                            className="px-4 py-2 rounded-full bg-white/10 border border-white/20 text-gray-100 text-sm hover:bg-white hover:text-black transition"
                        >
                            {skill}
                        </span>
                    ))}
                </div>
            </div>

            {/* Backend */}
            <div className="mb-10">
                <h3 className="text-xl font-semibold mb-4 text-white">
                    Backend
                </h3>

                <div className="flex flex-wrap gap-3">
                    {skills.backend.map((skill) => (
                        <span
                            key={skill}
                            className="px-4 py-2 rounded-full bg-white/10 border border-white/20 text-gray-100 text-sm hover:bg-white hover:text-black transition"
                        >
                            {skill}
                        </span>
                    ))}
                </div>
            </div>

            {/* Tools */}
            <div>
                <h3 className="text-xl font-semibold mb-4 text-white">
                    Tools
                </h3>

                <div className="flex flex-wrap gap-3">
                    {skills.tools.map((skill) => (
                        <span
                            key={skill}
                            className="px-4 py-2 rounded-full bg-white/10 border border-white/20 text-gray-100 text-sm hover:bg-white hover:text-black transition"
                        >
                            {skill}
                        </span>
                    ))}
                </div>
            </div>

        </div>
    );
}