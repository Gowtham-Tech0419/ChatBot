<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userMessage = strtolower(trim($_POST['message'])); // Convert to lowercase for consistency

    // Enhanced chatbot logic
    $responses = [
  "hello" => "Hi there! How can I help you?",
        "bye" => "Goodbye! Have a great day!",
        "thursday 1st" => "Open Elective",
        "thursday 2nd" => "DIP Lab/EDW Lab",
        "thursday 3rd" => "DIP Lab/EDW Lab",
        "thursday 4th" => "DIP Lab/EDW Lab",
        "thursday 5th" => "Professional Elective",
        "thursday 6th" => "Control System Engineering",
        "thursday 7th" => "Transmission Lines And Antennas",
        "thursday 8th" => "Very Large Scale Integration",
        "friday 1st" => "Open Elective",
        "friday 2nd" => "EDW Lab/VLSI Lab",
        "friday 3rd" => "EDW Lab/VLSI Lab",
        "friday 4th" => "EDW Lab/VLSI Lab",
        "friday 5th" => "Control System Engineering",
        "friday 6th" => "Very Large Scale Integration",
        "friday 7th" => "Digital Image Processing",
        "friday 8th" => "Transmission Lines And Antennas",
        "saturday 1st" => "Professional Elective",
        "saturday 2nd" => "Digital Image Processing",
        "saturday 3rd" => "Aptitude",
        "saturday 4th" => "Aptitude",
        "saturday 5th" => "Open Elective",
        "saturday 6th" => "Technical Seminar",
        "saturday 7th" => "Mandatory Course",
        "saturday 8th" => "NPTEL",
        "control system engineering book" => "1. I.J. Nagrath& M. Gopal, “Control Systems Engineering”, New Age International Publishers, Sixth edition, 
        2017.  " ,
        "very large scale integration book" => "Samir Palnitkar, Verilog HDL, Pearson Education, 2nd Edition, 2004. " ,
        "digital image processing book" => "Kenneth R. Castleman, Digital Image Processing, Pearson, 2006. " ,
        "transmission lines and antennas book" => "Umesh Sinha, “Transmission Lines and Network”, Satya Prakashan Publishing Company, New Delhi, 
        2012 " ,
        "aircraft communication book" => "Chris Binns, “Aircraft Systems: Instruments, Communications, Navigation, and Control”, Wiley, 2006 " ,
        "low power vlsi book" => "Gary Yeap, Practical Low Power Digital VLSI Design, Kluwer, 2012 " ,
        "soft computing book" => "Timothy J. Ross, “Fuzzy logic with Engineer Application,” McGraw Hill, 1997. "  ,
        "monday 1st" => "Professional Elective",
        "monday 2nd" => "Transmission Lines and Antennas",
        "monday 3rd" => "Control Systems",
        "monday 4th" => "Digital Image Processing",
        "monday 5th" => "Open Elective",
        "monday 6th" => "DIP lab/VLSI lab",
        "monday 7th" => "DIP lab/VLSI lab",
        "monday 8th" => "DIP lab/VLSI lab",
        "tuesday 1st" => "Very Large Scale Integration",
        "tuesday 2nd" => "Control Systems",
        "tuesday 3rd" => "Open Elective",
        "tuesday 4th" => "Professional Elective",
        "tuesday 5th" => "Transmission Lines and Antennas",
        "tuesday 6th" => "Very Large Scale Integration",
        "tuesday 7th" => "Transmission Lines and Antennas",
        "tuesday 8th" => "Digital Image Processing",
        "wednesday 1st" => "Control Systems",
        "wednesday 2nd" => "Very Large Scale Integration",
        "wednesday 3rd" => "Digital Image Processing",
        "wednesday 4th" => "Transmission Lines and Antennas",
        "wednesday 5th" => "Professional Elective",
        "wednesday 6th" => "Digital Image Processing",
        "wednesday 7th" => "Very Large Scale Integration",
        "wednesday 8th" => "Control Systems",
        "u20ect612 control system engineering syllabus" => "UNIT- I SYSTEM REPRESENTATION                                                                 
        Basic elements in control systems - Open and closed loop systems - Electrical analogy of mechanical and 
        rotational systems - Transfer function - Synchronous - AC and DC servo motors - Block diagram reduction 
        techniques - Signal flow graphs. 

        UNIT- II TIME RESPONSE                        
        Time response - Time domain specifications - Types of test input - I and II order system response - Error 
        coefficients - Generalized error series - Steady state error - P, PI, PID modes of feedback control. 
        UNIT-III FREQUENCY RESPONSE                        
        Frequency response - Bode plot - Polar plot - Constant M and N circles, Nichols chart, Determination of 
        closed loop response from open loop response - Correlation between frequency domain and time domain 
        specifications. 
        UNIT- IV STABILITY OF CONTROL SYSTEM                      
        Characteristics equation - Location of roots in S plane for stability - Routh Hurwitz criterion - Root locus 
        construction - Effect of pole, zero addition - Gain margin and phase margin - Nyquist stability criteria. 
        UNIT -V COMPENSATOR DESIGN                       
        Performance criteria - Lag, lead and lag - lead networks - Compensator design using bode plot. Introduction to 
        Digital Control Systems, Introduction to State Variable Analysis and Design - Advances in Control Systems. ",
        "u20ect613 digital vlsi system design syllabus" => "UNIT - I HARDWARE DESIGN AND IMPLEMENTATION                              
        Digital Hardware, The Design Process, Design of Digital Hardware, Standard Chips, Programmable Logic 
        Devices, Custom Chips, Standard Cells, and Gate Arrays, Implementation Details for SPLDs, CPLDs, and 
        FPGAs. 
        UNIT - II   DIGITAL CIRCUITS DESIGN                      
        Combinational Logic Design; Adders, Subtractor, Multiplier, Multiplexers, Demultiplexers, Decoders, 
        Encoders, Code Converters. Sequential Logic Design- Flip-Flops, Registers, Counters, Finite State Machines
        Mealy and Moore type, Serial Adder. 
        UNIT - III   INTRODUCTION TO VERILOG HDL                        
        Introduction to Verilog HDL: Verilog as HDL, Levels of Design Description, Concurrency, Simulation and 
        Synthesis, Functional Verification, System Tasks, Programming Language Interface (PLI), Module, Simulation 
        and Synthesis Tools. Language Constructs and Conventions: Introduction, Keywords, Identifiers, White Space 
        Characters, Comments, Numbers, Strings, Logic Values, Strengths, Data Types, Scalars and Vectors, 
        Parameters, 
        Operators. 
        UNIT - IV   LEVELS OF MODELING              
        Gate Level Modeling: Array of Instances of Primitives, Design of Flip-flops with Gate Primitives, Delays, 
        Dataflow Level Modeling Continuous Assignment Structure, Delays and Continuous Assignments, Assignment 
        to Vectors. Behavioral level Modeling: Initial and Always Construct, Assignments with Delays, Blocking and 
        Non-Blocking Assignments, Procedural Statements, Assign-De-Assign construct, Parallel Blocks, Force
        Release construct. Functions and Tasks, Design Examples. 
        UNIT - V SUBSYSTEM DESIGN USING VERILOG HDL                
        RTL coding for High speed adders, multipliers, divider,8-bit Counters, Finite state machines, Parallel to Serial 
        Converter, sequence detector, memories, ALU, clock divider, traffic light controller, Sequence generator, Test 
        bench for Combinational Circuits and Sequential Circuits. ",
        "u20eccm03 digital image processing syllabus" => "UNIT I DIGITAL IMAGE FUNDAMENTALS                            
        Introduction - Origin - Steps in Digital Image Processing - Components - Elements of Visual Perception - 
        Image Sensing and Acquisition - Image Sampling and Quantization - Relationships between pixels., simple 
        image formation model, Brightness, contrast, hue, saturation, Mach band effect 
        UNIT II IMAGE TRANSFORM:                            
        Two-dimensional Fourier Transform- Properties - Fast Fourier Transform - Inverse FFT- Image transforms - 
        1D DFT, 2D DFT, Discrete Cosine transform, Discrete Sine transform, Hadamard transform, Haar transform, 
        Slant transform, KL transform, SVD transform, Wavelet transform. 
        UNIT III IMAGE ENHANCEMENTAND IMAGE RESTORATION                      
        Spatial Domain: Gray level transformations - Histogram processing - Basics of Spatial Filtering - Smoothing 
        and Sharpening Spatial Filtering - Frequency Domain: Introduction to Fourier Transform - Smoothing and 
        Sharpening frequency domain filters - Ideal, Butterworth and Gaussian filters. Noise models - Mean Filters - 
        Order Statistics - Adaptive filters - Band reject Filters - Band pass Filters - Notch Filters - Optimum Notch 
        Filtering - Inverse Filtering - Wiener filtering. 
        UNIT IV COLOUR IMAGE PROCESSING AND IMAGE SEGMENTATION:                
        Colour fundamentals - Colour models - HIS to RGB and RGB to HIS. Detection of Discontinuities - Edge 
        Linking and Boundary detection - Region based segmentation- Morphological processing- erosion and 
        dilation. Segmentation by morphological watersheds - basic concepts - Dam construction - Watershed 
        segmentation algorithm 
        UNIT V IMAGE COMPRESSION AND RECOGNITION                                                             
        Need for compression - Coding Redundancy - Interpixel Redundancy - Psycho visual Redundancy - Bit plane 
        coding - Variable length coding - Adaptive coding - Arithmetic coding - LZW coding - Hybrid coding - 
        Wavelet - JPEG - MPEG. Boundary representation, Boundary description, Fourier Descriptor, Regional 
        Descriptors - Topological feature, Texture - Patterns and Pattern classes - Recognition based on matching. ",
        "u20ect615 transmission lines & antennas syllabus " => "UNIT- I TRANSMISSION LINE THEORY                                                                       
        Types of transmission lines, Primary and secondary constants. General solutions. Characteristic impedance, 
        propagation constant, attenuation and phase constants. Open circuited and short-circuited lines. The 
        telephone cable, Reflection of line not terminated in Z0- Reflection coefficient- Distortion in transmission lines- 
        Distortion less line. 
        UNIT - II THE LINE AT RADIO FREQUENCIES                        
        Standing waves and standing wave ratio on a line - One-eighth wave line - The quarter wave line and 
        impedance matching - the half wave line. The circle diagram for the dissipation less line - The Smith Chart - 
        Application of the Smith Chart - Conversion from impedance to reflection coefficient and vice-versa. 
        Impedance to Admittance conversion and vice versa - Input impedance of a lossless line terminated by an 
        impedance - single stub matching and double stub matching. 
        UNIT - III WAVE GUIDES                                                                                                          
        Transverse Magnetic waves, Transverse Electric waves and Transverse Electromagnetic waves between 
        parallel plates, TM and TE waves in Rectangular wave guides, Impossibility of TEM in Rectangular wave 
        guides, Bessel's differential equation and Bessel function, TM and TE waves in Circular wave guides. 
        UNIT - IV ANTENNA FUNDAMENTALS                                                                               
        Antenna parameters - Gain, Directivity, Effective aperture, Radiation Resistance, Bandwidth, Beam width; 
        Impedance matching: BALUNS, Polarization mismatch, Antenna noise temperature, Radiation from oscillating 
        dipole, half wave dipole and folded dipole 
        UNIT - V APERTURE ANTENNAS AND SPECIAL ANTENNAS                                              
        Aperture Antennas: Horn antennas, Reflector antennas, Slot antennas. Microstrip patch antenna, Yagi array, 
        Spiral antennas, helical antennas, log periodic antenna, Lens antennas, Fractal Antennas, Smart antennas 
        and antenna beam forming. Antenna Arrays: N-element linear array, Pattern multiplication, Broadside and end 
        fire array, Array synthesis: Binomial array ",
        "u20ece611 low power vlsi design syllabus " => "UNIT - I POWER DISSIPATION IN CMOS 
        Introduction to low power CMOS VLSI design-Need for low power VLSI chips-Charging and discharging 
        capacitance-Short circuit current in CMOS circuit- Short circuit current of an inverter-short circuit current 
        variation with output load-short circuit variation with input signal slope- CMOS leakage current-Static current- 
        Basic principles of low power design-Low power figure of merits. 
        UNIT -II SIMULATION AND PROBABILISTIC POWER ANALYSIS 
        SPICE circuit simulation- Gate level logic simulation - Architecture level analysis-Random logic signals 
        Characterization of logic signals-continuous and discrete random signals-Probability and Frequency Static 
        Probability and frequency-conditional probability and frequency-word level and bit level statistics Probabilistic 
        power analysis techniques-Signal entropy 
        UNIT-III DESIGN OF LOW POWER CMOS CIRCUIT 
        Transistor and gate sizing-Sizing an inverter chain-transistor and gate sizing for dynamic power reduction
        Equivalent pin ordering-Network reconstructing and reorganization-Special Latches and Flipflops-Low power 
        digital cell library-Gate Reorganization-Signal Gating-Logic Encoding 
        UNIT-IV LOW POWER STATIC RAM ARCHITECTURES 
        Introduction to SRAM-Organization of a static RAM-MOS static RAM memory cell-4T SRAM Architecture-6T 
        SRAM Architecture- SRAM cell operation-Banked organization of SRAMs-Reducing voltage swings on bit 
        lines-Reducing power in the write diver circuits-Reducing power in sense amplifier circuits 
        UNIT -V LOW POWER ARCHITECTURE AND ADVANCED TECHNIQUES 
        Power and performance management -Microprocessor sleep modes-performance management-adaptive 
        filtering-Switching activity reduction-Parallel architecture with voltage reduction-Adiabatic computation Pass 
        transistor logic synthesis-Asynchronous circuits ",
        "u20ece612 aircraft communication and navigation systems" => "UNIT- I INTRODUCTION
        Radio frequency spectrum, the ionosphere, silent zone and skip distance, Antennas, isotropic radiators, SWR, 
        transmitters and receivers, TRF, Super heterodyne receivers, Double super heterodyne receivers, design 
        examples 
        
        UNIT- II VHF AND HF COMMUNICATION AND EMERGENCY LOCATION TRANSMITTERS  
        VHF range and propagation, DSB modulation, channel spacing, depth of modulation, compression, squelch, 
        data modes, ACARS, VHF radio equipments, HF range and propagation, SSB modulation, SELCAL, HF data 
        link, HF radio equipment, HF antenna and coupling unit Emergency location transmitters: Types of ELT, 
        Maintenance and testing of ELT,ELT mounting requirements, typical ELT, Cospas-Sarsat satellites 
        
        UNIT - III AIRCRAFT NAVIGATION AND AUTOMATIC DIRECTION FINDER
        The earth and navigation, Dead reckoning, Position fixing, Maps and charts, ADF principles, ADF equipment, 
        Operational aspects of ADF 
        
        UNIT - IV RADIO NAVIGATION  
        Hyperbolic radio navigation, Hyperbolic position fixing, Loran overview, Doppler navigation, The Doppler 
        effect, Doppler navigation principles, Area navigation, RNAV overview, Inertial navigation systems, Inertial 
        navigation principles, Global navigation satellite system, GPS overview 
        
        UNIT - V AIR TRAFFIC CONTROL SYSTEM AND TRAFFIC ALERT AND COLLISION   
        AVOIDANCE SYSTEM 
        ATC overview, ATC transponder modes, Airborne equipment System operation, Automatic dependent 
        surveillance-broadcast, Communications, navigation and surveillance/air traffic management Airborne collision 
        avoidance systems, TCAS overview, TCAS equipment System operation. ",
        "u20bmcm01 Soft Computing" => "UNIT - I FUZZY SYSTEMS 
        Crisp sets - Fuzzy sets - Operation and properties. Fuzzy relations - Equivalence and tolerance relations. 
        Fuzzy membership function- Types and definitions. Membership value assignments - Rule based 
        systems. Type of fuzzy inference. Structure and parameters of a Fuzzy system- Computer assignment. 
        UNIT - II NEURAL NETWORKS 
        Biological inspiration - Neuron model and Network architectures perception - Architecture, learning rule. 
        Limitations of multiplayer perception- Back propagation algorithm - Learning rule - Computer assignments. 
        UNIT - III GENETIC ALGORITHM 
        Goals of optimization - Introduction to GA - Terminologies. Simple GA - Data structure. Genetic operation - 
        Crossover, mutation, fitness scaling, Inversion- A Multi parameter mapped fixed point coding - Computer 
        assignments. 
        UNIT - IV EVOLUTIONARY PROGRAMMING 
        Single and multi-objective Optimization-General Algorithm - Binary GA, Real parameter GA, constraint 
        handling in GA Evolution strategies general programming - Computer assignments. 
        UNIT - V APPLICATIONS 
        Applications to various branches of Engineering and science- Application off fuzzy, neural, GA and EP in 
        computer science, electrical, communication, instrumentation and control, mechanical and civil engineering",
        "exam" => "Modal exam start from 29/03/2025 to 07/04/2025",
    ];

    // Default response
    $botReply = "I didn't understand that.";

    // Check if the user's message matches any predefined responses
    foreach ($responses as $key => $response) {
        if (strpos($userMessage, $key) !== false) {
            $botReply = $response;
            break;
        }
    }

    // Send the reply back to the client
    echo $botReply;
}
?>
