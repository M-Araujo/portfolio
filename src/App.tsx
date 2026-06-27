import Navbar from "./components/Navbar";
import Hero from "./sections/Hero";
import Timeline from "./sections/Timeline/Timeline";
import Skills from "./sections/Skills/Skills";
import Contact from "./sections/Contact";
import Projects from "./sections/Projects/Projects";

function App() {
  return (
    <>
      <Navbar />

      <main>
        <section id="home">
          <Hero />
        </section>

        <section id="about">
          <Timeline />
        </section>

        <section id="skills">
          <Skills />
        </section>

        <section id="projects">
          <Projects />
        </section>

        <section id="contact">
          <Contact />
        </section>
      </main>
    </>
  );
}
export default App;