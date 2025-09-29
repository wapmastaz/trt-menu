// nav/superAdmin.ts
import { HouseIcon, LayoutGrid } from 'lucide-react';
import { NavItem } from '@/types';

export const superAdminNav: NavItem[] = [
  {
    title: "Dashboard",
    href: "/super-admin/dashboard",
    icon: LayoutGrid,
    roles: ["super-admin"],
  },

  {
    title: "Inventory",
    subtitle: "Manage Inventory",
    href: "/super-admin/inventory/categories",
    icon: HouseIcon,
    roles: ["super-admin"],
    children: [
      {
        title: "Categories",
        href: "/super-admin/inventory/categories",
        roles: ["super-admin"],
      },
    ]
  },
];
