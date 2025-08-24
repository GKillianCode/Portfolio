INSERT INTO `category` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'STACKS', NOW(), NOW()),
(2, 'FRAMEWORKS', NOW(), NOW()),
(3, 'DATABASES', NOW(), NOW()),
(4, 'APIS', NOW(), NOW());

INSERT INTO `skill_tag` (`id`, `category_id`, `name`, `created_at`, `updated_at`)
VALUES
(1, 1, 'PHP', NOW(), NOW()),
(2, 1, 'JavaScript', NOW(), NOW()),
(3, 1, 'SQL', NOW(), NOW()),
(4, 1, 'Java (exp. passée)', NOW(), NOW()),
(5, 1, 'Git', NOW(), NOW()),
(6, 1, 'Docker', NOW(), NOW()),
(7, 1, 'Composer', NOW(), NOW()),
(8, 1, 'Linux', NOW(), NOW()),
(9, 2, 'Symfony', NOW(), NOW()),
(10, 2, 'API Platform', NOW(), NOW()),
(11, 2, 'Vuejs 3', NOW(), NOW()),
(12, 2, 'TailwindCSS', NOW(), NOW()),
(13, 3, 'MySQL', NOW(), NOW()),
(14, 3, 'PostgreSQL', NOW(), NOW()),
(15, 3, 'Doctrine', NOW(), NOW()),
(16, 3, 'Splunk', NOW(), NOW()),
(17, 4, 'REST', NOW(), NOW()),
(18, 4, 'JWT', NOW(), NOW()),
(19, 4, 'Swagger', NOW(), NOW());

INSERT INTO `project_type` (`id`, `name`, `updated_at`, `created_at`) VALUES
(1, 'INTERN', NOW(), NOW()),
(2, 'PRO', NOW(), NOW()),
(3, 'SIDE', NOW(), NOW());