# Design Patterns in PHP

Practical exercises and refactoring examples applying Design Patterns in PHP.

This repository contains exercises focused on OOP, dependency injection, design patterns, low coupling, and maintainable code using modern PHP practices.

# 📚 Topics Covered

- Singleton Pattern
- Dependency Injection (DI)
- Encapsulation
- Strong typing with `strict_types`
- PHP 8 Enums
- Object-Oriented Programming (OOP)
- Clean code practices

# 🧱 Project Structure

## Sprint03 - Task02 - Level01

### Exercise part 1 >>> Singleton Pattern

Implementation of the Singleton pattern using the character `Tigger` from Winnie the Poo.

### Applied Concepts

- Singleton Pattern
- Static instance management
- Controlled object creation
- Encapsulation
- Private constructors

### Original Problem

The original implementation allowed multiple `Tigger` instances to be created.

This violated the Singleton principle because there should only be one Tigger instance during the application lifecycle.

### Refactoring Improvements

The class was refactored into a Singleton.

A static `getInstance()` method was added to ensure only one instance is created and reused.

A roar counter was also implemented to track how many times Tigger roars.

Benefits achieved:

 Better instance control  
 Centralized object access   
 Strong typing  
 
### Exercise part 2 >>> Dependency Injection (DI)

Simulation of a person preparing to leave home with essential items using Dependency Injection.

### Applied Concepts

- Dependency Injection
- Constructor Injection
- Encapsulation
- Enum usage
- Separation of responsibilities
- Strong typing with `strict_types`

### Main Classes

- `Wallet`
- `HouseKey`
- `Smartphone`
- `EssentialsBag`
- `TransportItem`

### Original Problem

The exercise required simulating everyday dependencies such as:

- wallet
- house keys
- smartphone
- transport items

while applying the Dependency Injection pattern.

### Refactoring Improvements

Dependencies are injected into the `EssentialsBag` class through the constructor instead of being instantiated internally.

Transport options were modeled using a PHP Enum for better readability and type safety.

Benefits achieved:

 Better readability  
 Lower coupling  
 Strong typing  
 Better maintainability  
 Clear separation of responsibilities  
 Cleaner architecture  

# Technologies 

- PHP 8+
- OOP
- Design Patterns
- Dependency Injection
- Singleton
- PHP Enums

# 📚 References

- PHP-DI Documentation  
  https://php-di.org/doc/understanding-di.html

- Building a Simple Dependency Injection Container in PHP  
  https://medium.com/@khaledzeitar/building-a-simple-dependency-injection-container-in-php-db3a397283ae
