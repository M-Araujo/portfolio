import { projects } from "./ProjectsData";

export default function Projects() {
    return (
        <section
            id="projects"
            className="max-w-5xl mx-auto px-6 py-16"
        >
            <h2 className="text-3xl font-bold text-center mb-12">
                Projects
            </h2>

            <div className="space-y-8">
                {projects.map((project) => (
                    <article
                        key={project.title}
                        className="rounded-2xl border border-white/10 bg-white/5 p-8"
                    >
                        <h3 className="text-2xl font-semibold mb-4">
                            {project.title}
                        </h3>

                        <p className="text-gray-300 mb-6">
                            {project.description}
                        </p>

                        <div className="flex flex-wrap gap-2 mb-6">
                            {project.stack.map((tech) => (
                                <span
                                    key={tech}
                                    className="px-3 py-1 rounded-full bg-white/10 border border-white/20 text-sm"
                                >
                                    {tech}
                                </span>
                            ))}
                        </div>

                        <div className="flex flex-wrap gap-4">
                            <a
                                href={project.links.react}
                                target="_blank"
                                rel="noreferrer"
                                className="text-cyan-400 hover:text-cyan-300"
                            >
                                React Demo →
                            </a>

                            <a
                                href={project.links.vue}
                                target="_blank"
                                rel="noreferrer"
                                className="text-cyan-400 hover:text-cyan-300"
                            >
                                Vue Demo →
                            </a>

                            <a
                                href={project.links.github}
                                target="_blank"
                                rel="noreferrer"
                                className="text-cyan-400 hover:text-cyan-300"
                            >
                                GitHub →
                            </a>
                        </div>
                    </article>
                ))}
            </div>
        </section>
    );
}