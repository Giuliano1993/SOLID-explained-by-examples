# SOLID Explained by Examples
This is a repo of some code examples used on a series of linkedIn posts about SOLID principles. At the end of the articles i will unite them in an article. You can find here all the examples and the posts, feel free to  play around with code, and reach out for any question or if you have any improvement.

## Introduction

Programming is a practice that lies at the intersection of science and art. It demands both specific technical knowledge and the mental flexibility and creativity to solve problems. As I often say, "Code has no dogmas"; each objective can be achieved in many different ways, all equally valid.

Having said that, there are a series of principles that allow code to be more functional and maintainable. While not essential at the beginning, they become fundamental when you decide to increase your reliability as a developer and the quality of your code.

Today, I want to introduce a topic that I will delve into in the coming weeks: the SOLID principles. These concepts, related to Object-Oriented Programming (OOP), make code maintainable over time. To explain the purpose of these principles, Robert C. Martin, in "Agile Software Development," starts by explaining the "symptoms" that code exhibits when these principles are violated:

- **Rigidity**: The application is difficult to modify, and each change forces many other modifications in the system.

- **Fragility**: Changes to the code cause breakages in parts of the program not directly related to the modified code.

- **Immobility**: It is challenging to divide the code into components that can be extracted and reused in other systems.

- **Viscosity**: Doing things the right way is more difficult than using hacks or workarounds.

- **Unnecessary Complexity**: The project contains structures that do not bring any real benefits.

- **Unnecessary Repetition**: The code contains redundant repetitions that could be abstracted into a single entity.

- **Opacity**: The code is challenging to read and understand.

These are signs (directly reported from "Agile Software Development") that indicate our code has some problems that, if not resolved, will turn development into a nightmare for us and our colleagues. The point is to have the ability to work well with the code and make it stable enough to allow the application to grow without risking its breaking.

It's essential to start from here because all of us (junior and senior developers) have encountered these types of problems in our code. And that's where the SOLID principles come into play! So, for those who are not familiar with them, what are these principles?


- [S - Single responsibility Principle](./SRP/README.md)
- [O - Open-Closed Principle](./OCP/README.md)
- [L - Liskov Substitution Principle](./LSP/README.md)
- [I - Interface Segregation Principle]()
- [D - Dependency Inversion Principle]()
