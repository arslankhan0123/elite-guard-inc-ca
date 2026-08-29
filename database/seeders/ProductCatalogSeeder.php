<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductCatalogSeeder extends Seeder
{
    /**
     * Seed the initial quotation-based product catalog.
     */
    public function run(): void
    {
        $featureImages = [
            'industrial-pumps' => 'uploads/products/feature_images/industrial-pumps.png',
            'industrial-engines-and-turbines' => 'uploads/products/feature_images/industrial-engines-and-turbines.png',
            'industrial-fire-hydrants' => 'uploads/products/feature_images/industrial-fire-hydrants.png',
            'oil-field-machinery' => 'uploads/products/feature_images/oil-field-machinery.png',
            'construction-excavators' => 'uploads/products/feature_images/construction-excavators.png',
            'heavy-duty-bulldozers' => 'uploads/products/feature_images/heavy-duty-bulldozers.png',
            'front-loaders' => 'uploads/products/feature_images/front-loaders.png',
            'construction-dump-trucks' => 'uploads/products/feature_images/construction-dump-trucks.png',
            'backhoe-loaders' => 'uploads/products/feature_images/backhoe-loaders.png',
            'bobcat-skid-steer-loaders' => 'uploads/products/feature_images/bobcat-skid-steer-loaders.png',
            'bricks-and-concrete-blocks' => 'uploads/products/feature_images/bricks-and-concrete-blocks.png',
            'construction-steel-and-metal-materials' => 'uploads/products/feature_images/construction-steel-and-metal-materials.png',
            'construction-and-architectural-glass' => 'uploads/products/feature_images/construction-and-architectural-glass.png',
            'timber-and-wood-construction-materials' => 'uploads/products/feature_images/timber-and-wood-construction-materials.png',
            'ceramic-building-materials' => 'uploads/products/feature_images/ceramic-building-materials.png',
            'plastic-and-foam-construction-materials' => 'uploads/products/feature_images/plastic-and-foam-construction-materials.png',
            'food-packaging-equipment' => 'uploads/products/feature_images/food-packaging-equipment.png',
            'food-and-beverage-industrial-mixers' => 'uploads/products/feature_images/food-and-beverage-industrial-mixers.png',
            'food-processing-tanks' => 'uploads/products/feature_images/food-processing-tanks.png',
            'commercial-food-processing-boilers' => 'uploads/products/feature_images/commercial-food-processing-boilers.png',
            'food-processing-industrial-dryers' => 'uploads/products/feature_images/food-processing-industrial-dryers.png',
            'food-and-beverage-processing-filters' => 'uploads/products/feature_images/food-and-beverage-processing-filters.png',
            'commercial-processing-autoclaves' => 'uploads/products/feature_images/commercial-processing-autoclaves.png',
        ];

        $catalog = [
            [
                'category' => ['name' => 'Industrial Equipment', 'slug' => 'industrial-equipment', 'order' => 1],
                'products' => [
                    [
                        'sku' => 'IND-001',
                        'name' => 'Industrial Pumps',
                        'slug' => 'industrial-pumps',
                        'short_description' => 'Industrial pumps designed for manufacturing plants, oil and gas operations, water systems and other heavy-duty industrial applications.',
                        'long_description' => 'Alberta International Traders supplies industrial pumps suitable for a wide range of commercial and industrial applications. We source different pump types, capacities and brands according to the operational requirements of our customers.\n\nOur global supplier network allows us to provide reliable solutions for oil and gas companies, manufacturing facilities, construction projects and general industrial operations. Customers can contact our sales team for available models, technical specifications, pricing and delivery information.',
                    ],
                    [
                        'sku' => 'IND-002',
                        'name' => 'Industrial Engines and Turbines',
                        'slug' => 'industrial-engines-and-turbines',
                        'short_description' => 'Industrial engines and turbines sourced for power generation, manufacturing and heavy industrial operations.',
                        'long_description' => 'We supply industrial engines and turbines from reputable manufacturers and international suppliers. Products can be sourced according to the required power capacity, fuel type, application and operating environment.\n\nOur team helps customers identify suitable equipment based on their technical and commercial requirements. New, used or refurbished options may be offered depending on availability.',
                    ],
                    [
                        'sku' => 'IND-003',
                        'name' => 'Industrial Fire Hydrants',
                        'slug' => 'industrial-fire-hydrants',
                        'short_description' => 'Reliable fire hydrants for industrial facilities, commercial developments and construction projects.',
                        'long_description' => 'Our industrial fire hydrants are suitable for fire protection systems in factories, warehouses, commercial buildings and construction developments. Different sizes, pressure ratings and connection standards can be sourced according to project requirements.\n\nContact our sales team with your required specifications, quantity and delivery location to receive pricing and availability.',
                    ],
                    [
                        'sku' => 'IND-004',
                        'name' => 'Oil Field Machinery',
                        'slug' => 'oil-field-machinery',
                        'short_description' => 'Oil field machinery and equipment sourced for petroleum, drilling and energy-sector operations.',
                        'long_description' => 'Alberta International Traders provides sourcing support for oil field machinery and related industrial equipment. We work with international suppliers to locate equipment based on customer specifications, required capacity, operating conditions and budget.\n\nCustomers can submit equipment details, model preferences or technical documents through the quotation form.',
                    ],
                ],
            ],
            [
                'category' => ['name' => 'Construction Equipment', 'slug' => 'construction-equipment', 'order' => 2],
                'products' => [
                    ['sku' => 'CON-EQP-001', 'name' => 'Construction Excavators', 'slug' => 'construction-excavators', 'short_description' => 'Heavy-duty excavators for digging, earthmoving, demolition and large construction projects.', 'long_description' => 'We source excavators in different sizes, operating weights and bucket capacities for construction, infrastructure and industrial projects. Customers may request new, used or refurbished machinery based on their project requirements.\n\nOur team can assist with model selection, equipment capacity, pricing and availability to help customers choose suitable machinery for the job.'],
                    ['sku' => 'CON-EQP-002', 'name' => 'Heavy-Duty Bulldozers', 'slug' => 'heavy-duty-bulldozers', 'short_description' => 'Powerful bulldozers for grading, land clearing, roadwork and heavy earthmoving operations.', 'long_description' => 'Alberta International Traders supplies bulldozers for construction sites, road development, mining and land preparation projects. Equipment can be sourced according to engine power, blade type, operating weight and project application.\n\nSend us your preferred brand, model, year and equipment condition to receive a customized quotation.'],
                    ['sku' => 'CON-EQP-003', 'name' => 'Front Loaders', 'slug' => 'front-loaders', 'short_description' => 'Front loaders for material handling, loading, construction and industrial site operations.', 'long_description' => 'Our front loaders are suitable for moving soil, gravel, sand, construction materials and other bulk products. Different bucket capacities and machine sizes can be sourced through our international supplier network.\n\nPricing and availability depend on brand, model, year, condition and delivery destination.'],
                    ['sku' => 'CON-EQP-004', 'name' => 'Construction Dump Trucks', 'slug' => 'construction-dump-trucks', 'short_description' => 'Dump trucks for transporting sand, gravel, soil, demolition waste and construction materials.', 'long_description' => 'We source dump trucks for construction companies, infrastructure contractors and industrial projects. Customers can request equipment based on load capacity, truck configuration, brand, model year and operating condition.'],
                    ['sku' => 'CON-EQP-005', 'name' => 'Backhoe Loaders', 'slug' => 'backhoe-loaders', 'short_description' => 'Versatile backhoe loaders for excavation, loading, trenching and general construction work.', 'long_description' => 'Backhoe loaders combine excavation and material-loading capabilities in one machine. They are suitable for construction sites, utility projects, roadwork and general maintenance operations.\n\nOur experienced sales team can help customers select the correct machine size and configuration.'],
                    ['sku' => 'CON-EQP-006', 'name' => 'Bobcat Skid-Steer Loaders', 'slug' => 'bobcat-skid-steer-loaders', 'short_description' => 'Compact skid-steer loaders for construction, landscaping and material-handling applications.', 'long_description' => 'Skid-steer loaders are suitable for projects requiring compact and highly maneuverable equipment. Available attachments may include buckets, forks, augers and breakers, depending on the selected model and supplier availability.'],
                ],
            ],
            [
                'category' => ['name' => 'Construction Materials', 'slug' => 'construction-materials', 'order' => 3],
                'products' => [
                    ['sku' => 'CON-MAT-001', 'name' => 'Bricks and Concrete Blocks', 'slug' => 'bricks-and-concrete-blocks', 'short_description' => 'Professional-grade bricks and concrete blocks for residential, commercial and industrial construction.', 'long_description' => 'We supply bricks and concrete blocks for different types of construction projects. Products may be sourced in multiple sizes, grades, strengths and finishes according to engineering and architectural requirements.\n\nBulk quantities and international delivery can be arranged based on product availability and project location.'],
                    ['sku' => 'CON-MAT-002', 'name' => 'Construction Steel and Metal Materials', 'slug' => 'construction-steel-and-metal-materials', 'short_description' => 'Steel and metal products for structural, architectural and general construction applications.', 'long_description' => 'Alberta International Traders sources construction-grade steel and metal materials from reputable suppliers. Products can be selected according to dimensions, thickness, grade, finish and intended application.\n\nCustomers should submit required quantities and technical specifications to receive an accurate quotation.'],
                    ['sku' => 'CON-MAT-003', 'name' => 'Construction and Architectural Glass', 'slug' => 'construction-and-architectural-glass', 'short_description' => 'Glass products for commercial buildings, residential projects and architectural installations.', 'long_description' => 'We supply glass materials for windows, façades, partitions and other building applications. Available options may include tempered, laminated, insulated and standard construction glass.\n\nSpecifications such as thickness, dimensions, glass type and required quantity should be included in the quotation request.'],
                    ['sku' => 'CON-MAT-004', 'name' => 'Timber and Wood Construction Materials', 'slug' => 'timber-and-wood-construction-materials', 'short_description' => 'Timber and wood materials for structural, finishing and general building applications.', 'long_description' => 'Our wood and timber products are sourced according to project requirements, preferred wood type, dimensions, grade and required quantity. Products may be supplied for structural work, interior finishing and commercial construction.'],
                    ['sku' => 'CON-MAT-005', 'name' => 'Ceramic Building Materials', 'slug' => 'ceramic-building-materials', 'short_description' => 'Ceramic products for flooring, wall finishing and commercial construction projects.', 'long_description' => 'We source ceramic construction materials in different designs, finishes, sizes and technical grades. Product availability depends on the selected manufacturer, required quantity and delivery location.'],
                    ['sku' => 'CON-MAT-006', 'name' => 'Plastic and Foam Construction Materials', 'slug' => 'plastic-and-foam-construction-materials', 'short_description' => 'Plastic and foam materials for insulation, protection and specialized construction applications.', 'long_description' => 'Plastic and foam construction materials can be sourced for thermal insulation, packaging, roofing, wall systems and other specialized applications. Customers can submit required density, thickness, dimensions and quantity for pricing.'],
                ],
            ],
            [
                'category' => ['name' => 'Food & Beverage Equipment', 'slug' => 'food-beverage-equipment', 'order' => 4],
                'products' => [
                    ['sku' => 'FBE-001', 'name' => 'Food Packaging Equipment', 'slug' => 'food-packaging-equipment', 'short_description' => 'Commercial packaging equipment for food, beverage and industrial production facilities.', 'long_description' => 'We supply food packaging equipment from established manufacturers in different models, sizes and production capacities. Equipment can be sourced for filling, sealing, wrapping, labeling and other packaging operations.\n\nBoth new and used equipment may be available. Customers should provide their required production capacity, packaging type and preferred automation level.'],
                    ['sku' => 'FBE-002', 'name' => 'Food and Beverage Industrial Mixers', 'slug' => 'food-and-beverage-industrial-mixers', 'short_description' => 'Industrial mixers for blending and processing food, beverage and liquid products.', 'long_description' => 'Our industrial mixers are suitable for food plants, beverage factories and commercial processing operations. Products can be sourced based on tank capacity, mixing speed, material type and production requirements.\n\nNew and used models may be offered depending on supplier availability.'],
                    ['sku' => 'FBE-003', 'name' => 'Food Processing Tanks', 'slug' => 'food-processing-tanks', 'short_description' => 'Stainless-steel processing and storage tanks for food and beverage production.', 'long_description' => 'We supply processing and storage tanks in multiple capacities and configurations. Depending on customer requirements, tanks may include agitators, temperature controls, pressure systems and sanitary fittings.\n\nCustomers should provide the required tank capacity, product type and preferred specifications.'],
                    ['sku' => 'FBE-004', 'name' => 'Commercial Food Processing Boilers', 'slug' => 'commercial-food-processing-boilers', 'short_description' => 'Commercial boilers for food processing plants, beverage factories and industrial operations.', 'long_description' => 'Commercial boilers can be sourced according to steam capacity, pressure rating, fuel type, operating requirements and installation environment. Our sales team assists customers in identifying suitable new or used equipment.'],
                    ['sku' => 'FBE-005', 'name' => 'Food Processing Industrial Dryers', 'slug' => 'food-processing-industrial-dryers', 'short_description' => 'Industrial dryers for commercial food production and processing applications.', 'long_description' => 'We supply industrial drying equipment in various sizes and production capacities. Equipment selection depends on the product being processed, moisture level, operating temperature and required output.'],
                    ['sku' => 'FBE-006', 'name' => 'Food and Beverage Processing Filters', 'slug' => 'food-and-beverage-processing-filters', 'short_description' => 'Commercial filtration equipment for food, beverage and liquid processing systems.', 'long_description' => 'Food and beverage processing filters are sourced according to filtration level, flow capacity, product type and sanitary requirements. Multiple filter configurations and manufacturers may be available.'],
                    ['sku' => 'FBE-007', 'name' => 'Commercial Processing Autoclaves', 'slug' => 'commercial-processing-autoclaves', 'short_description' => 'Industrial autoclaves for sterilization and controlled food-processing applications.', 'long_description' => 'We source commercial and industrial autoclaves in different chamber sizes and operating capacities. Products may be selected based on temperature range, pressure rating, automation and processing requirements.'],
                ],
            ],
        ];

        foreach ($catalog as $categoryData) {
            $category = Category::updateOrCreate(
                ['slug' => $categoryData['category']['slug']],
                $categoryData['category'] + ['status' => 'active'],
            );

            foreach ($categoryData['products'] as $productData) {
                Product::updateOrCreate(
                    ['slug' => $productData['slug']],
                    $productData + [
                        'category_id' => $category->id,
                        'purchase_price' => 0,
                        'sale_price' => 0,
                        'stock_quantity' => 0,
                        'feature_image' => $featureImages[$productData['slug']],
                        'status' => 'active',
                    ],
                );
            }
        }
    }
}
