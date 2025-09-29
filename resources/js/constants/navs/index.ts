// nav/index.ts
import { superAdminNav } from "./superAdmin";
import { NavItem } from '@/types';

export const allNavItems: NavItem[] = [
  ...superAdminNav,
];

export function getNavForRole(role: string) {
  return allNavItems.filter(item =>
    !item.roles || item.roles.includes(role)
  );
}
