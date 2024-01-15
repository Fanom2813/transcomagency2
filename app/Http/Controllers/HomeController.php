<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {

        $slides = [
            [
                'title' => 'Welcome to Transcom Agency',
                'description' => 'We extend a warm welcome to Transcom Agency, your trusted partner for general services in Comoros. Explore our offerings and discover the excellence we bring to every service.',
                'link' => '#',
            ],
            [
                'title' => 'Discover Comoros',
                'description' => 'Situated in the Indian Ocean, Comoros is a captivating archipelago known for its rich culture and natural beauty. Transcom Agency is proud to be a part of this vibrant community.',
                'link' => '#',
            ],
            [
                'title' => 'Quality Products from Comoros',
                'description' => 'At Transcom Agency, we specialize in selling high-quality products from Comoros, including cloves, ylang-ylang, and more. Explore our diverse range and experience the essence of Comorian goods.',
                'link' => '#',
            ],
            [
                'title' => 'Explore Our Services',
                'description' => 'We offer a wide range of services, including travel, tourism, and more. Our team is committed to providing you with the best experience possible.',
                'link' => '#',
            ],
        ];
        $serviceItems = [
            [
                'color' => 'pink',
                'icon' => 'bxl-dribbble',
                'title' => 'Bulk General Merchandise',
                'description' => 'Explore our extensive range of bulk general merchandise. We offer high-quality products in large quantities to meet your business needs.',
            ],
            [
                'color' => 'blue',
                'icon' => 'bxs-plane',
                'title' => 'Cloves and Ylang-Ylang',
                'description' => 'Discover the rich flavors of our cloves and the aromatic essence of ylang-ylang. We provide these premium products to enhance your culinary and wellness experiences.',
            ],
            [
                'color' => 'green',
                'icon' => 'bxs-moon',
                'title' => 'Islamic School',
                'description' => 'Invest in education with our Islamic school. We provide a nurturing environment where students can learn, grow, and develop both academically and spiritually.',
            ],
            [
                'color' => 'orange',
                'icon' => 'bx-code-curly',
                'title' => 'System Development',
                'description' => 'Harness the power of technology with our system development services. We create custom solutions to streamline your processes and enhance your business efficiency.',
            ],
            [
                'color' => 'blue',
                'icon' => 'bx-wifi',
                'title' => 'Internet Services',
                'description' => 'Stay connected with our reliable internet services. We provide fast and secure internet connectivity to keep you connected to the digital world.',
            ],
        ];

        $transcomFeatures = [
            [
                'title' => 'Quality Products',
                'description' => 'We provide high-quality products sourced directly from Comoros, including premium cloves, ylang-ylang, and more.',
                'points' => [
                    'Locally sourced and carefully selected products',
                    'Exceptional quality and freshness guaranteed',
                    'Diverse range to meet various business needs',
                ],
                'image' => asset('assets/img/qp.png'),
            ],
            [
                'title' => 'Global Reach',
                'description' => 'With a focus on international markets, our logistics and distribution ensure that our products reach clients globally.',
                'points' => [
                    'Strategic global distribution network',
                    'Efficient logistics for timely deliveries',
                    'Adherence to international quality standards',
                ],
                'image' => asset('assets/img/gr.png'),
            ],
            [
                'title' => 'Innovative Solutions',
                'description' => 'Our dedicated team develops innovative and customized systems to streamline processes and enhance business efficiency.',
                'points' => [
                    'Tailor-made solutions for unique business requirements',
                    'Continuous innovation to stay ahead in the industry',
                    'Expertise in cutting-edge technologies',
                ],
                'image' => asset('assets/img/is.png'),
            ],
            [
                'title' => 'Educational Excellence',
                'description' => 'Transcom Agency proudly supports an Islamic school, fostering educational growth and spiritual development in the community.',
                'points' => [
                    'Establishment and support of educational institutions',
                    'Holistic approach to academic and spiritual development',
                    'Commitment to building a knowledgeable society',
                ],
                'image' => asset('assets/img/ee.png'),
            ],
            [
                'title' => 'Reliable Internet Services',
                'description' => 'Stay connected with our reliable internet services. We offer fast and secure connectivity to keep you connected to the digital world.',
                'points' => [
                    'High-speed and reliable internet connections',
                    'Secure and stable network infrastructure',
                    'Tailored solutions for businesses and individuals',
                ],
                'image' => asset('assets/img/ri.png'),
            ],
            [
                'title' => 'Customer Satisfaction',
                'description' => 'Our commitment to customer satisfaction is unwavering. We prioritize client needs, ensuring a positive and seamless experience with our services.',
                'points' => [
                    'Customer-centric approach in all our operations',
                    'Prompt and responsive customer support',
                    'Continuous feedback and improvement processes',
                ],
                'image' => asset('assets/img/cs.png'),
            ],
            [
                'title' => 'Environmental Responsibility',
                'description' => 'Transcom Agency is dedicated to environmental responsibility. We implement eco-friendly practices to minimize our ecological footprint.',
                'points' => [
                    'Implementation of sustainable and eco-friendly practices',
                    'Reduction of carbon footprint in all operations',
                    'Commitment to environmental conservation',
                ],
                'image' => asset('assets/img/ev.png'),
            ],
            [
                'title' => 'Community Engagement',
                'description' => 'We actively engage with the local community, supporting initiatives that contribute to the well-being and development of the people.',
                'points' => [
                    'Active participation in community development projects',
                    'Support for local charities and social initiatives',
                    'Commitment to social responsibility and giving back',
                ],
                'image' => asset('assets/img/ce.png'),
            ],
        ];
        return view('welcome', compact('serviceItems', 'slides', 'transcomFeatures'));
    }

    public function about()
    {
        return view('about');
    }

    public function contactUs()
    {
        return view('contact');
    }
}
