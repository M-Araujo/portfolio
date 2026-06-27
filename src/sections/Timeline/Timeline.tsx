import { motion } from "framer-motion";
import { timelineData } from "./TimelineData";

function getIcon(icon: string) {
    switch (icon) {
        case "graduation":
            return "🎓";
        case "briefcase":
            return "💼";
        case "code":
            return "💻";
        case "road":
            return "🛣️";
        default:
            return "📌";
    }
}

export default function Timeline() {
    return (
        <div className="max-w-4xl mx-auto px-6 py-16">
            <h2 className="text-3xl font-bold text-center mb-12">
                My Journey
            </h2>

            <div className="space-y-12 relative">
                <div className="hidden md:block absolute left-1/2 -translate-x-1/2 h-full border-l border-gray-300" />

                {timelineData.map((item, index) => {
                    const isLeft = index % 2 === 0;

                    return (
                        <motion.div
                            key={item.title}
                            initial={{ opacity: 0, y: 40 }}
                            whileInView={{ opacity: 1, y: 0 }}
                            transition={{ duration: 0.5, delay: index * 0.1 }}
                            viewport={{ once: true, amount: 0.3 }}
                            className={`flex flex-col md:flex-row ${isLeft ? "" : "md:flex-row-reverse"
                                } items-center`}
                        >
                            {/* LEFT SPACER (VERY IMPORTANT) */}
                            <div className="hidden md:block w-1/2" />

                            {/* RIGHT SIDE CONTAINER */}
                            <div className="w-full md:w-1/2">

                                <div className="flex items-start gap-4 bg-white border rounded-xl shadow-sm p-6 hover:shadow-md transition w-full">

                                    {/* Dot */}
                                    <div className="flex-shrink-0 w-10 h-10 bg-black text-white rounded-full flex items-center justify-center text-sm">
                                        {getIcon(item.icon)}
                                    </div>

                                    {/* Text */}
                                    <div className="flex flex-col">
                                        <h3 className="text-xl font-semibold text-gray-900">
                                            {item.title}
                                        </h3>
                                        <p className="mt-2 text-gray-700">
                                            {item.description}
                                        </p>
                                    </div>

                                </div>

                            </div>
                        </motion.div>
                    );
                })}
            </div>
        </div>
    );
}