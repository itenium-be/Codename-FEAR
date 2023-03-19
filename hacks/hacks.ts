export type Hack = {
  flag: string;
  name: string;
  points: number;
}

export type Hacks = {[key: string]: Hack};

/** The flags */
export const Hacks: Hacks = {
  /** Become portal admin */
  FrontendValidation: {
    flag: 'SC-PK05DHPU-BNVIRPQ4',
    name: 'Frontend Validation 🤫',
    points: 3,
  },
}
