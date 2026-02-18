-- ============================================================
-- EFL Database Schema
-- Endless Frontier Labs Website Database
-- ============================================================
-- Run this file in phpMyAdmin or MySQL command line to set up the database
-- ============================================================

-- Create Database
CREATE DATABASE IF NOT EXISTS efl_database
CHARACTER SET utf8mb4 
COLLATE utf8mb4_unicode_ci;

USE efl_database;

-- ============================================================
-- TABLE: mentors
-- Stores mentor information for the mentors page
-- ============================================================
DROP TABLE IF EXISTS mentors;
CREATE TABLE mentors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    title TEXT NOT NULL,
    tracks VARCHAR(255) NOT NULL COMMENT 'Comma-separated: Deep Tech, Digital Tech, Life Sciences, Digital Health',
    mentor_type VARCHAR(50) NOT NULL DEFAULT 'Mentor' COMMENT 'Mentor, Chief Mentor, Scientific Mentor',
    image_url VARCHAR(500) NOT NULL,
    profile_link VARCHAR(500) NOT NULL,
    is_active TINYINT(1) DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_tracks (tracks),
    INDEX idx_mentor_type (mentor_type),
    INDEX idx_active (is_active)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================================
-- TABLE: startups
-- Stores startup company information
-- ============================================================
DROP TABLE IF EXISTS startups;
CREATE TABLE startups (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    location VARCHAR(255) DEFAULT '',
    track VARCHAR(100) NOT NULL COMMENT 'Deep Tech, Digital Tech, Life Sciences, Digital Health',
    cohort VARCHAR(20) DEFAULT '' COMMENT 'e.g., 2024-2025, 2023-2024',
    status VARCHAR(100) DEFAULT '' COMMENT 'Elizabeth Elting Award, Exit, IPO, or empty',
    image_url VARCHAR(500) DEFAULT '',
    profile_link VARCHAR(500) NOT NULL,
    is_active TINYINT(1) DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_track (track),
    INDEX idx_cohort (cohort),
    INDEX idx_status (status),
    INDEX idx_active (is_active)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================================
-- TABLE: faq_categories
-- FAQ category groupings
-- ============================================================
DROP TABLE IF EXISTS faq_categories;
CREATE TABLE faq_categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL UNIQUE COMMENT 'PROGRAM, STARTUP, APPLICATION',
    sort_order INT DEFAULT 0,
    is_active TINYINT(1) DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================================
-- TABLE: faqs
-- Frequently Asked Questions
-- ============================================================
DROP TABLE IF EXISTS faqs;
CREATE TABLE faqs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    category_id INT NOT NULL,
    question TEXT NOT NULL,
    answer TEXT NOT NULL,
    sort_order INT DEFAULT 0,
    is_active TINYINT(1) DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (category_id) REFERENCES faq_categories(id) ON DELETE CASCADE,
    INDEX idx_category (category_id),
    INDEX idx_sort (sort_order),
    INDEX idx_active (is_active)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================================
-- TABLE: jobs
-- Job postings from EFL startups
-- ============================================================
DROP TABLE IF EXISTS jobs;
CREATE TABLE jobs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(500) NOT NULL,
    post_date DATE NOT NULL,
    image_url VARCHAR(500) DEFAULT '',
    job_link VARCHAR(500) NOT NULL,
    is_active TINYINT(1) DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_date (post_date),
    INDEX idx_active (is_active)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================================
-- INSERT FAQ Categories
-- ============================================================
INSERT INTO faq_categories (name, sort_order) VALUES 
('PROGRAM', 1),
('STARTUP', 2),
('APPLICATION', 3);

-- ============================================================
-- INSERT FAQs
-- ============================================================
INSERT INTO faqs (category_id, question, answer, sort_order) VALUES 
-- PROGRAM FAQs
(1, "What's Endless Frontier Labs?", "EFL is a structured mentoring program that provides founders with resources, support and advice to optimize your chances for success. During the course of EFL's 9-month program, we host 3 virtual sessions and 2 in-person sessions, each 6-8 weeks apart, that bring together startups with mentors and investors to set goals and to prioritize tasks between meetings.", 1),
(1, "How's Endless Frontier Labs different than other accelerators/incubators?", "EFL's mission is educational. We do not take any equity in the companies and do not charge any fees. It is a 9-month program allowing for ample time for founders to make the progress necessary towards becoming a high-growth company. Startups can and are encouraged to participate in EFL and other programs simultaneously.", 2),
(1, "Can my company simultaneously participate in other accelerators/incubators?", "Yes and it is encouraged.", 3),
(1, "What's a performance driven mentoring process?", "Unlike other mentorship programs, EFL provides structure and accountability for startups by setting goals at each meeting. 3 goals per session are determined by the mentors and provide a framework for the startup to prioritize tasks over the subsequent 6-8 weeks.", 4),
(1, "How do I access capital?", "Startups can raise funds at any point during the program and all deals are done outside of the EFL purview. During the end of each session, a startup can ask if there is any interest in the room to have a financing meeting. The startup manager can coordinate introductions, but there is no commitment for mentors to make an investment.", 5),
(1, "What do MBA's do for their startups?", "MBA students are there to help solve known and unknown business problems for their startup CEOs. At a minimum, MBAs are required to complete 5 assignments based on goals set by mentors, but we have seen MBA students provide further value by leveraging their networks to make introductions to major companies, traveling to conferences, and joining high-profile meetings with industry professionals.", 6),
(1, "What is the required commitment for the program?", "We require that the startups CEO participate in each of our three virtual meeting days and two in person [in NYC] meetings days.", 7),

-- STARTUP FAQs
(2, "What stage of startups is suitable for the EFL?", "We have a broad definition of early-stage. Some companies can be straight out of the lab, while others could have raised a million dollars in funding. Any startup that is pre-Series A could be a good fit.", 1),
(2, "What's the difference between Deep Tech, Digital Health, Digital Tech, & Life Sciences?", "Our definitions are broad and our goal is bringing in the best startups with the most exciting technologies. Our program focuses on startups who have a core technology they are looking to commercialize as opposed to a startup that is based on an execution play. If you are unsure which track your startup fits into please let us know if you have a preference and this will be decided once we have received all applications in August. Life Sciences is for startups with breakthroughs in biology, medicine, and healthcare. Deep Tech is for startups developing technologies in the physical and materials sciences. Digital Tech is for startups leveraging improvements in software, data analytics, AI and ML. Digital Health is for startups applying digital technologies to improve health and wellbeing.", 2),

-- APPLICATION FAQs
(3, "Do I need an NYU or NYC affiliation to apply?", "No, any startup from anywhere in the world can apply.", 1),
(3, "Do I need a team to apply?", "No, we have had single founders successfully complete the program. The key is that they are technical and able to execute on the scientific/technical advice provided by the mentors.", 2),
(3, "Do I need to be technical to apply?", "Our hypothesis is that combining top scientists with elite business advice will yield exceptional results. Our program is best suited for technical teams who need help starting up their company, so the startup must have some level of technical talent on the core team.", 3),
(3, "Do I need to fly in for interview day?", "No, all interviews will take place virtually, via Zoom.", 4);

-- ============================================================
-- SAMPLE INSERT Statements for Mentors (first 5 as example)
-- Run the full data import separately
-- ============================================================
INSERT INTO mentors (name, title, tracks, mentor_type, image_url, profile_link) VALUES 
('Adam Wollowick', 'Senior Director of Business Development, Stryker Trauma and Extremities', 'Digital Health', 'Mentor', 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Wollowick.jpeg', 'https://endlessfrontierlabs.com/mentors/adam-wollowick'),
('Ade Ajanaku', 'Staff Product Manager, Intuit', 'Digital Tech', 'Mentor', 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Ade-Ajanaku.png', 'https://endlessfrontierlabs.com/mentors/ade-ajanaku'),
('Adi Eckhouse Barzilai', 'Co-Founder & CEO, Present Gaming', 'Digital Tech', 'Mentor', 'https://endlessfrontierlabs.com/wp-content/uploads/2024/04/Adi-Eckhouse-Barzilai.jpg', 'https://endlessfrontierlabs.com/mentors/adi-eckhouse-barzilai'),
('Alan Harris', 'Physician-Scientist Entrepreneur and Pharmaceutical Executive', 'Life Sciences, Digital Health', 'Mentor', 'https://endlessfrontierlabs.com/wp-content/uploads/2025/01/Alan_Harris-Headshot-e1736877695260.png', 'https://endlessfrontierlabs.com/mentors/alan-harris-2'),
('Alan Roemer', 'Board of Directors, Multiple Biotechnology Companies', 'Life Sciences', 'Mentor', 'https://endlessfrontierlabs.com/wp-content/uploads/2024/07/Alan_Roemer_Photo-scaled-1.jpg', 'https://endlessfrontierlabs.com/mentors/alan-roemer');

-- ============================================================
-- SAMPLE INSERT Statements for Startups (first 5 as example)
-- Run the full data import separately
-- ============================================================
INSERT INTO startups (name, location, track, cohort, status, image_url, profile_link) VALUES 
('ATOMICS', 'Providence, RI', 'Deep Tech', '2024-2025', '', '', 'https://endlessfrontierlabs.com/startups/atomics'),
('AVOL', 'Brooklyn, NY', 'Deep Tech', '2024-2025', '', '', 'https://endlessfrontierlabs.com/startups/avol'),
('CYANOTYPE BIO', '', 'Deep Tech', '2024-2025', '', '', 'https://endlessfrontierlabs.com/startups/cyanotype-bio'),
('ENIGMA AEROSPACE', '', 'Deep Tech', '2024-2025', '', '', 'https://endlessfrontierlabs.com/startups/enigma-aerospace'),
('FERMBOX BIO', '', 'Deep Tech', '2024-2025', '', '', 'https://endlessfrontierlabs.com/startups/fermbox-bio');

-- ============================================================
-- SAMPLE INSERT Statements for Jobs (first 5 as example)
-- Run the full data import separately
-- ============================================================
INSERT INTO jobs (title, post_date, image_url, job_link) VALUES 
('DataSpan.AI (Digital Tech, ''24-25) is hiring: Multiple Positions', '2025-05-01', 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Dataspan.ai_.png', 'https://www.dataspan.ai/jobs-1'),
('SpruceID (Digital Tech, ''24-25) is hiring: Multiple Positions', '2025-05-01', 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/SpruceID.png', 'https://jobs.lever.co/sprucesystems'),
('Telness Tech (Digital Tech, ''24-25) is hiring: Multiple Positions', '2025-05-01', 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Telness-Tech.png', 'https://careers.telnesstech.com/#jobs'),
('CartaBio (Digital Tech, ''24-25) is hiring: Multiple Positions', '2025-05-01', 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/CartaBio.png', 'https://cartabio.ai/careers'),
('Clover Leaf (Life Sciences, ''24-25) is hiring: Multiple Positions', '2025-05-01', 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Cloverleaf-Bio.png', 'https://cloverleaf-bio.breezy.hr');

-- ============================================================
-- Useful Queries for the Application
-- ============================================================

-- Get all mentors ordered by name
-- SELECT * FROM mentors WHERE is_active = 1 ORDER BY name;

-- Get mentors filtered by track
-- SELECT * FROM mentors WHERE is_active = 1 AND tracks LIKE '%Deep Tech%' ORDER BY name;

-- Get mentors filtered by type
-- SELECT * FROM mentors WHERE is_active = 1 AND mentor_type = 'Chief Mentor' ORDER BY name;

-- Get all startups with filters
-- SELECT * FROM startups WHERE is_active = 1 AND track = 'Deep Tech' AND cohort = '2024-2025' ORDER BY name;

-- Get FAQs by category with category name
-- SELECT fc.name as category, f.question, f.answer 
-- FROM faqs f 
-- JOIN faq_categories fc ON f.category_id = fc.id 
-- WHERE f.is_active = 1 
-- ORDER BY fc.sort_order, f.sort_order;

-- Get active jobs ordered by date
-- SELECT * FROM jobs WHERE is_active = 1 ORDER BY post_date DESC;

-- Count startups by track
-- SELECT track, COUNT(*) as count FROM startups WHERE is_active = 1 GROUP BY track;

-- Count mentors by type
-- SELECT mentor_type, COUNT(*) as count FROM mentors WHERE is_active = 1 GROUP BY mentor_type;
